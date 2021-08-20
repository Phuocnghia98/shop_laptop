<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


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
        return [
            'order_number' => $this->faker->randomNumber(3),
            'order_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'required_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'shipped_date' => $this->faker->dateTime($max = 'now', $timezone = null),
            'status' => $this->faker->randomNumber(2),
            'comments' => $this->faker->text(),
            'customer_number' => $allCMNumber[array_rand($allCMNumber, 1)],

        ];
    }
}
