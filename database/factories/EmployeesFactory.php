<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class EmployeesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employees::class;

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
            'employee_number' => $this->faker->randomNumber(5),
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName($gender = 'male'|'female'),
            'extension' => 'abc',
            'email' => $this->faker->email(),
            'office_code' => $allOFCode[array_rand($allOFCode, 1)],
            'reports_to' => $this->faker->text(40),
            'job_title' => $this->faker->jobTitle(),


        ];

    }
}
