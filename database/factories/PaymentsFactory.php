<?php

namespace Database\Factories;

use App\Models\Payments;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class PaymentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payments::class;

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

        //     'check_number' => $this->faker->randomNumber(4),
        //     'customer_number' => $allCMNumber[array_rand($allCMNumber, 1)],
        //     'payment_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        //     'amount' => $this->faker->randomNumber(6),


        // ];

        $start = strtotime("10 September 2020");
        //End point of our date range.
        $end = strtotime("22 July 2021");
        //Custom range.
        $timestamp = mt_rand($start, $end);
        return [

            'check_number' => rand(1213, 2323),
            'customer_number' => $allCMNumber[array_rand($allCMNumber, 1)],
            'payment_date' => date("Y-m-d", $timestamp),
            'amount' => rand(124121, 234243),


        ];
    }
}
