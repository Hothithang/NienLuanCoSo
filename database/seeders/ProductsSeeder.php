<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productRecords = [
            ['id' => 1, 'category_id' => 6, 'name' => 'Dress 1', 'description' => 'Dress 1 Dress 1 Dress 1 Dress 1',
                'price' => 998, 'image' => '478.jpg', 'status_id' => 2, 'discount_percent' => 10],
            ['id' => 2, 'category_id' => 8, 'name' => 'Trouser 1', 'description' => 'Trouser 1 Trouser 1 Trouser 1 Trouser 1',
                'price' => 774, 'image' => '402.jpg', 'status_id' => 2, 'discount_percent' => 0],
            ['id' => 3, 'category_id' => 7, 'name' => 'Top 1', 'description' => 'Top 1 Top 1 Top 1',
                'price' => 732, 'image' => '426.jpg', 'status_id' => 1, 'discount_percent' => 0],
            ['id' => 4, 'category_id' => 9, 'name' => 'Coat 1', 'description' => 'Coat 1 Coat 1 Coat 1',
                'price' => 1021, 'image' => '416.jpg', 'status_id' => 1, 'discount_percent' => 10],
            ['id' => 5, 'category_id' => 6, 'name' => 'Dress 2', 'description' => 'Dress 2 Dress 2 Dress 2 Dress 2',
                'price' => 994, 'image' => '188.jpg', 'status_id' => 2, 'discount_percent' => 5],
            ['id' => 6, 'category_id' => 8, 'name' => 'Skirt 1', 'description' => 'Skirt 1 Skirt 1 Skirt 1 Skirt 1',
                'price' => 974, 'image' => '279.jpg', 'status_id' => 2, 'discount_percent' => 5],
            ['id' => 7, 'category_id' => 9, 'name' => 'Hoodie 1', 'description' => 'Hoodie 1 Hoodie 1 Hoodie 1',
                'price' => 1045, 'image' => '458.jpg', 'status_id' => 1, 'discount_percent' => 0],
            ['id' => 8, 'category_id' => 3, 'name' => 'Dat Apquel Denny Cheany', 'description' => 'Dat Apquel Denny Cheany Dat Apquel Denny Cheany Dat Apquel Denny Cheany',
                'price' => 2673, 'image' => '38.jpg', 'status_id' => 1, 'discount_percent' => 0],
            ['id' => 9, 'category_id' => 4, 'name' => 'Chaty Vennal Cenieq', 'description' => 'Chaty Vennal Cenieq Chaty Vennal Cenieq Chaty Vennal Cenieq Chaty Vennal Cenieq',
                'price' => 8200, 'image' => '932.jpg', 'status_id' => 3, 'discount_percent' => 0],
            ['id' => 10, 'category_id' => 4, 'name' => 'Rjalkd hdlka jdaokd', 'description' => 'Rjalkd hdlka jdaokd Rjalkd hdlka jdaokd Rjalkd hdlka jdaokd',
                'price' => 9953, 'image' => '965.jpg', 'status_id' => 3, 'discount_percent' => 5],
            ['id' => 11, 'category_id' => 4, 'name' => 'Ajjjjjjdauw fjjjrrrrrrrrrrrra', 'description' => 'Ajjjjjjdauw fjjjrrrrrrrrrrrra Ajjjjjjdauw fjjjrrrrrrrrrrrra ',
                'price' => 9804, 'image' => '984.jpg', 'status_id' => 3, 'discount_percent' => 0],
            ['id' => 12, 'category_id' => 8, 'name' => 'Pant 1', 'description' => 'Pant 1 Pant 1 Pant 1 Pant 1',
                'price' =>1223, 'image' => '515.jpg', 'status_id' => 1, 'discount_percent' => 0],
            ['id' => 13, 'category_id' => 3, 'name' => 'Ajdjlak hdhoa hjofla', 'description' => 'Top 1111111',
                'price' => 8700, 'image' => '40.jpg', 'status_id' => 1, 'discount_percent' => 0],
            ['id' => 14, 'category_id' => 4, 'name' => 'Tjklfapifpjdn fhkajfl hfhalkjfa', 'description' => 'Tjklfapifpjdn fhkajfl hfhalkjfa Tjklfapifpjdn fhkajfl hfhalkjfa',
                'price' => 9999, 'image' => '793.jpg', 'status_id' => 3, 'discount_percent' => 0],
            ['id' => 15, 'category_id' => 4, 'name' => 'Yflkaj hdkal dhk', 'description' => 'Yflkaj hdkal dhk,s Yflkaj hdkal dhk,s Yflkaj hdkal dhk,s',
                'price' => 9900, 'image' => '794.jpg', 'status_id' => 3, 'discount_percent' => 5],
            ['id' => 16, 'category_id' => 5, 'name' => 'Ajjdaho dhkada', 'description' => 'Ajjdaho dhkad Ajjdaho dhkada Ajjdaho dhkada',
                'price' => 774, 'image' => '655.jpg', 'status_id' => 1, 'discount_percent' => 10],
            ['id' => 17, 'category_id' => 8, 'name' => 'Pant 3', 'description' => 'Pant 3 Pant 3 Pant 3 Pant 3',
                'price' => 882, 'image' => '244.jpg', 'status_id' => 1, 'discount_percent' => 0],
            ['id' => 18, 'category_id' => 6, 'name' => 'Dress 4', 'description' => 'Dress 4 Dress 4 Dress 4 Dress 4',
                'price' => 992, 'image' => '220.jpg', 'status_id' => 1, 'discount_percent' => 0],
            ['id' => 19, 'category_id' => 3, 'name' => 'Ajjdka kjdlah dpoqjwfr', 'description' => 'Ajjdka kjdlah dpoqjwfr Ajjdka kjdlah dpoqjwfr Ajjdka kjdlah dpoqjwfr',
                'price' => 9932, 'image' => '47.jpg', 'status_id' => 1, 'discount_percent' => 0],
            ['id' => 20, 'category_id' => 5, 'name' => 'Akdj jjkaj hhgdaa', 'description' => 'Akdj jjkaj hhgdaa Akdj jjkaj hhgdaa Akdj jjkaj hhgdaa',
                'price' => 9932, 'image' => '660.jpg', 'status_id' => 1, 'discount_percent' => 0],
        ];
        Product::insert($productRecords);
    }
}
