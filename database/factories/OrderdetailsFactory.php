<?php

namespace Database\Factories;

use App\Models\Orderdetails;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class OrderdetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orderdetails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $allOD = DB::table('orders')->get()->toArray();
        $allODNumber = array_column($allOD, 'order_number');


        $allPD = DB::table('products')->get()->toArray();
        $allPDCode = array_column($allPD, 'product_code');
        return [

            'order_number' => $allODNumber[array_rand($allODNumber, 1)],
            'product_code' => $allPDCode[array_rand($allPDCode, 1)],
            'price_each' => $this->faker->randomNumber(2),
            'quantity_ordered' => $this->faker->randomNumber(2),
            'order_lineNumber' => $this->faker->randomNumber(4),


        ];




    }
}
