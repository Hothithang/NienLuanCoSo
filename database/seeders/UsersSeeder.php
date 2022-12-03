<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRecords = [
            ['id' => 1, 'name' => 'User 1', 'email' => 'user1@gmail.com',
                'password' => '$2y$10$cTyveTDfmdLfC2X1gGRhqupA4gnMP03BAhHbQMilRsNEGuHt2E756'],
            ['id' => 2, 'name' => 'User 2', 'email' => 'user2@gmail.com',
                'password' => '$2y$10$cTyveTDfmdLfC2X1gGRhqupA4gnMP03BAhHbQMilRsNEGuHt2E756'],
        ];
        User::insert($userRecords);
    }
}