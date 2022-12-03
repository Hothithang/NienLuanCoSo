<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusRecords = [
            ['id' => 1, 'name' => 'Normal', 'description' => 'Normal'],
            ['id' => 2, 'name' => 'Trending', 'description' => 'Trending'],
            ['id' => 3, 'name' => 'Special', 'description' => 'Special']

        ];
        Status::insert($statusRecords);
    }
}
