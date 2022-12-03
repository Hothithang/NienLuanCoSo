<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductImages;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productimagesRecords = [
            ['id' => 1, 'product_id' => 1, 'image' => '479.jpg'],
            ['id' => 2, 'product_id' => 1, 'image' => '480.jpg'],
            ['id' => 3, 'product_id' => 1, 'image' => '481.jpg'],
            ['id' => 4, 'product_id' => 1, 'image' => '482.jpg'],
            ['id' => 5, 'product_id' => 1, 'image' => '483.jpg'],
            ['id' => 6, 'product_id' => 2, 'image' => '403.jpg'],
            ['id' => 7, 'product_id' => 2, 'image' => '404.jpg'],
            ['id' => 8, 'product_id' => 2, 'image' => '405.jpg'],
            ['id' => 9, 'product_id' => 2, 'image' => '406.jpg'],
            ['id' => 10, 'product_id' => 3, 'image' => '427.jpg'],
            ['id' => 11, 'product_id' => 3, 'image' => '428.jpg'],
            ['id' => 12, 'product_id' => 3, 'image' => '429.jpg'],
            ['id' => 13, 'product_id' => 4, 'image' => '417.jpg'],
            ['id' => 14, 'product_id' => 4, 'image' => '418.jpg'],
            ['id' => 15, 'product_id' => 4, 'image' => '419.jpg'],
            ['id' => 16, 'product_id' => 5, 'image' => '189.jpg'],
            ['id' => 17, 'product_id' => 5, 'image' => '190.jpg'],
            ['id' => 18, 'product_id' => 5, 'image' => '191.jpg'],
            ['id' => 19, 'product_id' => 6, 'image' => '280.jpg'],
            ['id' => 20, 'product_id' => 6, 'image' => '281.jpg'],
            ['id' => 21, 'product_id' => 6, 'image' => '282.jpg'],
            ['id' => 22, 'product_id' => 7, 'image' => '459.jpg'],
            ['id' => 23, 'product_id' => 7, 'image' => '461.jpg'],
            ['id' => 24, 'product_id' => 7, 'image' => '462.jpg'],
            ['id' => 25, 'product_id' => 7, 'image' => '463.jpg'],
            ['id' => 26, 'product_id' => 12, 'image' => '516.jpg'],
            ['id' => 27, 'product_id' => 12, 'image' => '517.jpg'],
            ['id' => 28, 'product_id' => 12, 'image' => '518.jpg'],
            ['id' => 29, 'product_id' => 17, 'image' => '545.jpg'],
            ['id' => 30, 'product_id' => 17, 'image' => '546.jpg'],
            ['id' => 31, 'product_id' => 17, 'image' => '547.jpg'],
            ['id' => 32, 'product_id' => 18, 'image' => '221.jpg'],
            ['id' => 33, 'product_id' => 18, 'image' => '222.jpg'],
            ['id' => 34, 'product_id' => 18, 'image' => '223.jpg'],

        ];
        ProductImages::insert($productimagesRecords);
    }
}
