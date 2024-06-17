<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        User::factory(5)->create();
        // User::create([
        //     'name' => 'ridwan agus',
        //     'email' => 'ridwan_agus@gmail.com',
        //     'password' => 'bcrypt(1234)'
        // ]);
        // User::create([
        //     'name' => 'raikal ahmad',
        //     'email' => 'raikal_ahmad@gmail.com',
        //     'password' => 'bcrypt(1234)'
        // ]);
        Category::create([
            'name' => 'web-programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'blog',
            'slug' => 'blog'
        ]);

        Post::factory(20)->create();

    }
}
