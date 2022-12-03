<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryRecords = [
            ['id' => 1, 'parent_id' => 0, 'name' => 'Ready-To-Wear', 'description' => 'Ready-To-Wear'],
            ['id' => 2, 'parent_id' => 0, 'name' => 'Women\'s Winter Collection', 'description' => 'Women"s Winter Collection'],
            ['id' => 3, 'parent_id' => 0, 'name' => 'Défilé Christian 2021 Haute Couture', 'description' => 'Défilé Christian 2021 Haute Couture'],
            ['id' => 4, 'parent_id' => 0, 'name' => 'Elie Saab - Fall 2021 Haute  Couture', 'description' => 'Elie Saab - Fall 2021 Haute  Couture'],
            ['id' => 5, 'parent_id' => 0, 'name' => 'Iris Van Herpen FW21 Haute Couture', 'description' => 'Iris Van Herpen FW21 Haute Couture'],
            ['id' => 6, 'parent_id' => 1, 'name' => 'Dresses', 'description' => 'Dresses'],
            ['id' => 7, 'parent_id' => 1, 'name' => 'Tops & Shirts', 'description' => 'Tops & Shirts'],
            ['id' => 8, 'parent_id' => 1, 'name' => 'Skirts & Trousers', 'description' => 'Skirts & Trousers'],
            ['id' => 9, 'parent_id' => 1, 'name' => 'Coat & Hoodies', 'description' => 'Coat & Hoodies'],
        ];
        Category::insert($categoryRecords);
    }
}
