<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [

            'image' => 'https://source.unsplash.com/random',
            'time' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'title' => $this->faker->text($maxNbChars = 200),
            'content' => $this->faker->text($maxNbChars = 400)   ,
            'main_content' => $this->faker->text(),

        ];



    }
}
