<?php

namespace Database\Factories;

use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Images::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $allPD = DB::table('products')->get()->toArray();
        $allPDid = array_column($allPD, 'id_product');
        return [
            'image' => 'https://picsum.photos/200/300',
            'id_product' => $allPDid[array_rand($allPDid, 1)],

        ];
    }
}
