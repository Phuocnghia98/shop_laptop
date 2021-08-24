<?php

namespace Database\Factories;

use App\Models\Productlines;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Util\Stringfake;

class ProductlinesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productlines::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_line' => Stringfake::randomProductline(),
            'text_description' => Stringfake::generateRandomString(30),
            'html_description' => Stringfake::generateRandomString(45),
            'image' => 'https://source.unsplash.com/random',
        ];
    }
}
