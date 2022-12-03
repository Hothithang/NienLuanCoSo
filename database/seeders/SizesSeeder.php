<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizesRecords = [
            ['id' => 1, 'name' => 'XS', 'description' => 'Extra Small'],
            ['id' => 2, 'name' => 'S', 'description' => 'Small'],
            ['id' => 3, 'name' => 'M', 'description' => 'Medium'],
            ['id' => 4, 'name' => 'L', 'description' => 'Large'],
            ['id' => 5, 'name' => 'XL', 'description' => 'Extra Large'],
            ['id' => 6, 'name' => 'XXL', 'description' => 'Extra Extra Large']

        ];
        Size::insert($sizesRecords);
    }
}
