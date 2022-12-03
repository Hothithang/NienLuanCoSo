<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleRecords = [
            ['id' => 1, 'name' => 'Super Admin', 'description' => 'Super Admin'],
            ['id' => 2, 'name' => 'Admin', 'description' => 'Admin'],
        ];
        Role::insert($roleRecords);
    }
}
