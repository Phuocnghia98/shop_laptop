<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Generator as Faker;

class ProductlinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('productlines')->insert([
            // ['product_line' => 'Thiết bị di động', 'text_description' => 'Điện thoại di động là thiết bị không thể thiếu hiện nay', 'html_description' => '<h1>Iphone 12 promax 126gb</h1>', 'image' => 'https://cdn.tgdd.vn/Products/Images/42/228743/iphone-12-pro-max-vang-new-600x600-1-600x600.jpg'],
            // ['product_line' => 'Thiết bị gia dụng', 'text_description' => 'Các thiệt bị bếp hiên đại đến từ thái lan', 'html_description' => '<h1>Bếp từ thái lan</h1>', 'image' => 'https://kangaroo.vn/wp-content/uploads/kg859i-800x600.jpg'],
            // ['product_line' => 'Đồ chơi trẻ em', 'text_description' => 'Đồ chơi trẻ em dưới 10 tuổi', 'html_description' => '<h1>Bộ lắp ghép xếp hình trẻ em</h1>', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.V3jDhsi_Ur0DGfV9h-djeQHaHa&pid=Api&P=0&w=300&h=300'],
            // ['product_line' => 'Đồ chơi trẻ em', 'text_description' => 'Đồ chơi trẻ em dưới 10 tuổi', 'html_description' => '<h1>Bộ lắp ghép xếp hình trẻ em</h1>', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.V3jDhsi_Ur0DGfV9h-djeQHaHa&pid=Api&P=0&w=300&h=300'],
            // ['product_line' => 'Đồ chơi trẻ em', 'text_description' => 'Đồ chơi trẻ em dưới 10 tuổi', 'html_description' => '<h1>Bộ lắp ghép xếp hình trẻ em</h1>', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.V3jDhsi_Ur0DGfV9h-djeQHaHa&pid=Api&P=0&w=300&h=300']
            // ['product_line' => 'Đồ chơi trẻ em', 'text_description' => 'Đồ chơi trẻ em dưới 10 tuổi', 'html_description' => '<h1>Bộ lắp ghép xếp hình trẻ em</h1>', 'image' => 'https://tse1.mm.bing.net/th?id=OIP.V3jDhsi_Ur0DGfV9h-djeQHaHa&pid=Api&P=0&w=300&h=300']
        // ]);

        for ($i=0; $i < 10; $i++) {
            DB::table('productlines')->insert([
                [
                    'product_line' => $faker->company(),
                    'text_description' => 'Điện thoại di động là thiết bị không thể thiếu hiện nay',
                    'html_description' => '<h1>Iphone 12 promax 126gb</h1>',
                    'image' => 'https://cdn.tgdd.vn/Products/Images/42/228743/iphone-12-pro-max-vang-new-600x600-1-600x600.jpg'],
            ]);
        }
    }
}
