<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profileRecords = [
            ['id' => 1, 'user_id' => 1, 'gender' => 'Male',
                'birth_date' => '1991-06-12', 'avatar' => 'user1.jpg'],
            ['id' => 2, 'user_id' => 2, 'gender' => 'FeMale',
                'birth_date' => '1991-08-22', 'avatar' => 'user2.jpg'],
        ];
        Profile::insert($profileRecords);
    }
}