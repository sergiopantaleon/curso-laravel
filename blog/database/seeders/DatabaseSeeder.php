<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

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
        User::create(
            [
                'name' => 'Sergio Ramirez',
                'email' => 'i@admin.com',
                'password' => bcrypt('123456')
            ]
        );

        Post::factory()->count(20)->create();

    }
}
