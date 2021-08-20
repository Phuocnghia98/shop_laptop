<?php

namespace Database\Factories;

use App\Models\Productlines;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'product_line' => $this->faker->company(),
            'text_description' => $this->faker->realText(),
            'html_description' => $this->faker->randomHtml(2, 3),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
