<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UsersSeeder::class);
        $this->call(AdminsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(StatusesSeeder::class);
        $this->call(SizesSeeder::class);
        $this->call(ProductsSizesSeeder::class);
        $this->call(ProductImagesSeeder::class);
        $this->call(BannersSeeder::class);
        $this->call(ProfilesSeeder::class);

    }
}
