<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductsSizes;

class ProductsSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productsizeRecords = [
            ['id' => 1, 'product_id' => 1, 'size_id' => 1, 'quantity' => 10],
            ['id' => 2, 'product_id' => 1, 'size_id' => 2, 'quantity' => 15],
            ['id' => 3, 'product_id' => 1, 'size_id' => 3, 'quantity' => 12],
            ['id' => 4, 'product_id' => 1, 'size_id' => 4, 'quantity' => 16],
            ['id' => 5, 'product_id' => 1, 'size_id' => 5, 'quantity' => 13],
            ['id' => 6, 'product_id' => 1, 'size_id' => 6, 'quantity' => 10],
            ['id' => 7, 'product_id' => 2, 'size_id' => 1, 'quantity' => 17],
            ['id' => 8, 'product_id' => 2, 'size_id' => 2, 'quantity' => 25],
            ['id' => 9, 'product_id' => 2, 'size_id' => 3, 'quantity' => 10],
            ['id' => 10, 'product_id' => 3, 'size_id' => 2, 'quantity' => 30],
            ['id' => 11, 'product_id' => 3, 'size_id' => 3, 'quantity' => 35],
            ['id' => 12, 'product_id' => 3, 'size_id' => 4, 'quantity' => 10],
            ['id' => 13, 'product_id' => 4, 'size_id' => 2, 'quantity' => 30],
            ['id' => 14, 'product_id' => 4, 'size_id' => 3, 'quantity' => 35],
            ['id' => 15, 'product_id' => 5, 'size_id' => 1, 'quantity' => 30],
            ['id' => 16, 'product_id' => 5, 'size_id' => 2, 'quantity' => 35],
            ['id' => 17, 'product_id' => 6, 'size_id' => 1, 'quantity' => 10],
            ['id' => 18, 'product_id' => 6, 'size_id' => 2, 'quantity' => 30],
            ['id' => 19, 'product_id' => 6, 'size_id' => 3, 'quantity' => 35],
            ['id' => 20, 'product_id' => 6, 'size_id' => 6, 'quantity' => 10],
            ['id' => 21, 'product_id' => 7, 'size_id' => 3, 'quantity' => 35],
            ['id' => 22, 'product_id' => 7, 'size_id' => 4, 'quantity' => 10],
            ['id' => 23, 'product_id' => 7, 'size_id' => 5, 'quantity' => 30],
            ['id' => 24, 'product_id' => 8, 'size_id' => 1, 'quantity' => 35],
            ['id' => 25, 'product_id' => 8, 'size_id' => 2, 'quantity' => 10],
            ['id' => 26, 'product_id' => 8, 'size_id' => 3, 'quantity' => 30],
            ['id' => 28, 'product_id' => 9, 'size_id' => 3, 'quantity' => 35],
            ['id' => 29, 'product_id' => 9, 'size_id' => 4, 'quantity' => 10],
            ['id' => 30, 'product_id' => 10, 'size_id' => 2, 'quantity' => 30],
            ['id' => 31, 'product_id' => 10, 'size_id' => 3, 'quantity' => 35],
            ['id' => 32, 'product_id' => 10, 'size_id' => 4, 'quantity' => 10],
            ['id' => 33, 'product_id' => 11, 'size_id' => 2, 'quantity' => 30],
            ['id' => 34, 'product_id' => 11, 'size_id' => 3, 'quantity' => 35],
            ['id' => 35, 'product_id' => 11, 'size_id' => 4, 'quantity' => 10],
            ['id' => 36, 'product_id' => 12, 'size_id' => 2, 'quantity' => 30],
            ['id' => 37, 'product_id' => 12, 'size_id' => 3, 'quantity' => 35],
            ['id' => 38, 'product_id' => 13, 'size_id' => 1, 'quantity' => 10],
            ['id' => 39, 'product_id' => 13, 'size_id' => 2, 'quantity' => 30],
            ['id' => 40, 'product_id' => 13, 'size_id' => 3, 'quantity' => 35],
            ['id' => 41, 'product_id' => 14, 'size_id' => 3, 'quantity' => 10],
            ['id' => 42, 'product_id' => 14, 'size_id' => 4, 'quantity' => 30],
            ['id' => 43, 'product_id' => 15, 'size_id' => 1, 'quantity' => 35],
            ['id' => 44, 'product_id' => 15, 'size_id' => 2, 'quantity' => 10],
            ['id' => 45, 'product_id' => 15, 'size_id' => 4, 'quantity' => 30],
            ['id' => 46, 'product_id' => 16, 'size_id' => 3, 'quantity' => 35],
            ['id' => 47, 'product_id' => 16, 'size_id' => 4, 'quantity' => 10],
            ['id' => 48, 'product_id' => 16, 'size_id' => 5, 'quantity' => 30],
            ['id' => 49, 'product_id' => 16, 'size_id' => 6, 'quantity' => 35],
            ['id' => 50, 'product_id' => 17, 'size_id' => 1, 'quantity' => 10],
            ['id' => 51, 'product_id' => 17, 'size_id' => 2, 'quantity' => 30],
            ['id' => 52, 'product_id' => 17, 'size_id' => 3, 'quantity' => 35],
            ['id' => 53, 'product_id' => 18, 'size_id' => 1, 'quantity' => 10],
            ['id' => 54, 'product_id' => 18, 'size_id' => 2, 'quantity' => 30],
            ['id' => 55, 'product_id' => 18, 'size_id' => 3, 'quantity' => 35],
            ['id' => 56, 'product_id' => 19, 'size_id' => 2, 'quantity' => 10],
            ['id' => 57, 'product_id' => 19, 'size_id' => 3, 'quantity' => 35],
            ['id' => 58, 'product_id' => 20, 'size_id' => 1, 'quantity' => 10],
            ['id' => 59, 'product_id' => 20, 'size_id' => 2, 'quantity' => 30],
            ['id' => 60, 'product_id' => 20, 'size_id' => 3, 'quantity' => 35],
            ['id' => 61, 'product_id' => 20, 'size_id' => 4, 'quantity' => 10],

        ];
        ProductsSizes::insert($productsizeRecords);
    }
}
