<?php

namespace Database\Factories;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Util\Stringfake;

class CustomersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'customer_number' => $this->faker->randomNumber(3),
        //     'customer_name' => $this->faker->name(),
        //     'contact_lastName' => $this->faker->lastName(),
        //     'contact_firstName' => $this->faker->firstName($gender = 'male' | 'female'),
        //     'phone' => $this->faker->phoneNumber(),
        //     'address_line1' => $this->faker->streetAddress(),
        //     'address_line2' => $this->faker->streetAddress(),
        //     'city' => $this->faker->city(),
        //     'state' => $this->faker->state(),
        //     'postal_code' => $this->faker->postcode(),
        //     'country' => $this->faker->country(),
        //     'sales_repEmployeeNumber' => $this->faker->randomNumber(4),
        //     'credit_limit' => $this->faker->randomNumber(4, 2),
        //     'user_id' => $this->faker->randomNumber(2)
        // ];

        return [
            'customer_number' => rand(10, 200),
            'customer_name' => Stringfake::randomName(),
            'contact_lastName' => Stringfake::randomLastName(),
            'contact_firstName' => Stringfake::randomFirstName(),
            'phone' => Stringfake::randomPhone(),
            'address_line1' => Stringfake::randomAddress(),
            'address_line2' => Stringfake::randomAddress(),
            'city' => Stringfake::randomCity(),
            'state' => rand(12345, 98765),
            'postal_code' => rand(100, 999),
            'country' => Stringfake::randomCountry(),
            'sales_repEmployeeNumber' => rand(1111, 4567),
            'credit_limit' => rand(100, 2000),
            'user_id' => rand(10, 99)
        ];
    }
}
