<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Util\Stringfake;


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

        // return [

        //     'image' => 'https://source.unsplash.com/random',
        //     'time' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        //     'title' => $this->faker->text($maxNbChars = 200),
        //     'content' => $this->faker->text($maxNbChars = 400)   ,
        //     'main_content' => $this->faker->text(),

        // ];

        $start = strtotime("10 September 2020");
        //End point of our date range.
        $end = strtotime("22 July 2021");
        //Custom range.
        $timestamp = mt_rand($start, $end);
        return [

            'image' => 'https://source.unsplash.com/random',
            'time' => date("Y-m-d", $timestamp),
            'title' => Stringfake::generateRandomString(50),
            'content' => Stringfake::generateRandomString(200),
            'main_content' => Stringfake::generateRandomString(150),


        ];
    }
}
