<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Util\Stringfake;


class OrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $allCM = DB::table('customers')->get()->toArray();
        $allCMNumber = array_column($allCM, 'customer_number');
        // return [
        //     'order_number' => $this->faker->randomNumber(3),
        //     'order_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        //     'required_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        //     'shipped_date' => $this->faker->dateTime($max = 'now', $timezone = null),
        //     'status' => $this->faker->randomNumber(2),
        //     'comments' => $this->faker->text(),
        //     'customer_number' => $allCMNumber[array_rand($allCMNumber, 1)],

        // ];

        $start = strtotime("10 September 2020");
        //End point of our date range.
        $end = strtotime("22 July 2021");
        //Custom range.
        $timestamp = mt_rand($start, $end);


        return [
            'order_number' => rand(345, 789),
            'order_date' => date("Y-m-d", $timestamp),
            'required_date' => date("Y-m-d", $timestamp),
            'shipped_date' => date("Y-m-d", $timestamp),
            'status' => rand(20, 80),
            'comments' =>  Stringfake::generateRandomString(25),
            'customer_number' => $allCMNumber[array_rand($allCMNumber, 1)],

        ];
    }
}
