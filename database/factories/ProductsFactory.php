<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Util\Stringfake;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $allPL = DB::table('productlines')->get()->toArray();
        $allPLTitle = array_column($allPL, 'product_line');
        // $price = $this->faker->randomNumber(6, 2);
        // return [
        //     'product_code' => rand(123, 456),
        //     'product_name' => $this->faker->name(),
        //     'product_line' => $allPLTitle[array_rand($allPLTitle, 1)], // ko đc random -> phai lay tu bang productline
        //     'product_scale' => Str::random(100),
        //     'product_vendor' => $this->faker->company(),
        //     'product_description' => $this->faker->text($maxNbChars = 200),
        //     'quantity_inStock' => $this->faker->randomNumber(5),
        //     'price' => $price,
        //     'MSRP' => $this->faker->realText(),
        //     'image' => 'https://picsum.photos/200/300',
        //     'hot' => rand(0, 1),
        //     'cost_price' => $price + 100000,
        // ];

        $price = rand(100000, 10000000);
        return [
            'product_code' => rand(123, 456),
            'product_name' => Stringfake::generateRandomString(20),
            'product_line' => $allPLTitle[array_rand($allPLTitle, 1)], // ko đc random -> phai lay tu bang productline
            'product_scale' => Stringfake::generateRandomString(100),
            'product_vendor' => Stringfake::generateRandomString(40),
            'product_description' => Stringfake::generateRandomString(200),
            'quantity_inStock' => rand(234, 567),
            'price' => $price,
            'MSRP' => Stringfake::generateRandomString(10),
            'image' => 'https://picsum.photos/200/300',
            'hot' => rand(0, 1),
            'cost_price' => $price + 100000,
        ];
    }
}
