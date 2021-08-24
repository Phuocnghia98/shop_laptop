<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Util\Stringfake;


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
            'employee_number' => Str::random(5),
            'last_name' => Stringfake::randomLastName(),
            'first_name' => Stringfake::randomFirstName(),
            'extension' => 'abc',
            'email' => Stringfake::randomEmail(),
            'office_code' => $allOFCode[array_rand($allOFCode, 1)],
            'reports_to' => Stringfake::generateRandomString(20),
            'job_title' => Stringfake::generateRandomString(50),


        ];
    }
}
