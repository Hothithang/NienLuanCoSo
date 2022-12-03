<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            ['id' => 1, 'name' => 'Super Admin', 'type' => 'superadmin', 'phone' => '0399191400',
                'email' => 'superadmin@superadmin.com', 'password' => '$2y$10$cTyveTDfmdLfC2X1gGRhqupA4gnMP03BAhHbQMilRsNEGuHt2E756', 
                'image' => '6215.jpg', 'status' => 1],
            ['id' => 2, 'name' => 'Admin', 'type' => 'admin', 'phone' => '0399191400',
                'email' => 'admin@admin.com', 'password' => '$2y$10$cTyveTDfmdLfC2X1gGRhqupA4gnMP03BAhHbQMilRsNEGuHt2E756', 
                'image' => '6215.jpg', 'status' => 1],
        ];
        Admin::insert($adminRecords);
    }
}
