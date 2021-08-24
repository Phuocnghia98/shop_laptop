<?php

namespace Database\Factories;

use App\Models\Offices;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Util\Stringfake;



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
            'office_code' => Str::random(5),
            'city' => Stringfake::randomCity(),
            'phone' => Stringfake::randomPhone(),
            'address_line1' => Stringfake::randomAddress(),
            'address_line2' => Stringfake::randomAddress(),
            'state' => rand(12352, 92325),
            'country' => Stringfake::randomCountry(),
            'postal_code' => rand(123, 934),
            'teritory' => Stringfake::randomAddress(),

        ];
    }
}
