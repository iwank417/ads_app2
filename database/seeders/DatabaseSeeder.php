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
        //---------------------------------
        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Judul : Airmata Dihari Persandinganmu

        //     Artist : 3 Pemuda Berbahaya feat. Sallsa Bintan
            
        //     Pencipta : Juwie - Kamal Halim
            
        //     Dipopulerkan : Lestar',
        //     'body' => 'Sudah berulang kali aku bermain cinta
        //     Jadi baru abang yang adik cinta
        //     Pemuda yang gangguku semuanya buaya
        //     Abang jadi ragu pada dirimu
        //     Kau masih gadis atau sudah janda
        //     Baik katakan saja jangan malu
        //     Memangnya mengapa aku harus malu?
        //     Abang tentu dapat tuk membedakannya
        //     Kau katakan saja yang sesungguhnya
        //     Sesungguhnya diriku
        //     Oh, memang sudah janda
        //     Walaupun kau janda tetap kucinta
        //     Kau masih gadis atau sudah janda
        //     Baik katakan saja jangan malu
        //     Memangnya mengapa aku harus malu?
        //     Abang tentu dapat tuk membedakannya
        //     Kau katakan saja yang sesungguhnya
        //     Sesungguhnya diriku
        //     Oh, memang sudah janda
        //     Walaupun kau janda tetap kucinta
        //     Marilah segera kita kawin saja',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Judul : Airmata Dihari Persandinganmu

        //     Artist : 3 Pemuda Berbahaya feat. Sallsa Bintan
            
        //     Pencipta : Juwie - Kamal Halim
            
        //     Dipopulerkan : Lestar',
        //     'body' => 'Sudah berulang kali aku bermain cinta
        //     Jadi baru abang yang adik cinta
        //     Pemuda yang gangguku semuanya buaya
        //     Abang jadi ragu pada dirimu
        //     Kau masih gadis atau sudah janda
        //     Baik katakan saja jangan malu
        //     Memangnya mengapa aku harus malu?
        //     Abang tentu dapat tuk membedakannya
        //     Kau katakan saja yang sesungguhnya
        //     Sesungguhnya diriku
        //     Oh, memang sudah janda
        //     Walaupun kau janda tetap kucinta
        //     Kau masih gadis atau sudah janda
        //     Baik katakan saja jangan malu
        //     Memangnya mengapa aku harus malu?
        //     Abang tentu dapat tuk membedakannya
        //     Kau katakan saja yang sesungguhnya
        //     Sesungguhnya diriku
        //     Oh, memang sudah janda
        //     Walaupun kau janda tetap kucinta
        //     Marilah segera kita kawin saja',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Judul : Airmata Dihari Persandinganmu

        //     Artist : 3 Pemuda Berbahaya feat. Sallsa Bintan
            
        //     Pencipta : Juwie - Kamal Halim
            
        //     Dipopulerkan : Lestar',
        //     'body' => 'Sudah berulang kali aku bermain cinta
        //     Jadi baru abang yang adik cinta
        //     Pemuda yang gangguku semuanya buaya
        //     Abang jadi ragu pada dirimu
        //     Kau masih gadis atau sudah janda
        //     Baik katakan saja jangan malu
        //     Memangnya mengapa aku harus malu?
        //     Abang tentu dapat tuk membedakannya
        //     Kau katakan saja yang sesungguhnya
        //     Sesungguhnya diriku
        //     Oh, memang sudah janda
        //     Walaupun kau janda tetap kucinta
        //     Kau masih gadis atau sudah janda
        //     Baik katakan saja jangan malu
        //     Memangnya mengapa aku harus malu?
        //     Abang tentu dapat tuk membedakannya
        //     Kau katakan saja yang sesungguhnya
        //     Sesungguhnya diriku
        //     Oh, memang sudah janda
        //     Walaupun kau janda tetap kucinta
        //     Marilah segera kita kawin saja',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);




    }
}
