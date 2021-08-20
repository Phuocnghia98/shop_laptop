<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Productlines::factory(5)->create();
        \App\Models\Products::factory(100)->create();
        \App\Models\Customers::factory(10)->create();
        \App\Models\Offices::factory(10)->create();
        \App\Models\Employees::factory(10)->create();
        \App\Models\Orders::factory(10)->create();
        \App\Models\Payments::factory(10)->create();
        \App\Models\Orderdetails::factory(100)->create();
        \App\Models\Blog::factory(10)->create();
        \App\Models\Images::factory(1000)->create();

        // $this->call([
        //     ProductlinesSeeder::class
        // ]);
    }
}
