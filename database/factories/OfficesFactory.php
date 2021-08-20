<?php

namespace Database\Factories;

use App\Models\Offices;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class OfficesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $allOF = DB::table('offices')->get()->toArray();
        $allOFCode = array_column($allOF, 'office_code');
        return [
            'office_code' => $this->faker->randomNumber(5),
            'city' => $this->faker->city(),
            'phone' => $this->faker->phoneNumber(),
            'address_line1' => $this->faker->streetAddress(),
            'address_line2' => $this->faker->streetAddress(),
            'state' => $this->faker->state(),
            'country' => $this->faker->country(),
            'postal_code' => $this->faker->postcode(),
            'teritory' => $this->faker->streetAddress(),

        ];
    }
}
