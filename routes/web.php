<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
//use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return View('home', [
        "title" => "Home"
        ]);
});

Route::get('/about', function () {
    return View('about',[
        "title" => "About",
        "name" => "ridwan agus",
        "email" => "ridwan_agus@gmail.com",
        "image" => "iwank.jpg"



        ]);
});

Route::get('/blog', [PostController::class,'index']);
// halaman single post -------
Route::get('post/{post:slug}',[PostController::class,'show'] );
//----------------------------------------------------
Route::get('/categories/{category:slug}',function(Category $category){

    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name

    ]);



});
Route::get('/authors/{user}',function(User $user){

    return view('posts' ,[
            'title' => 'User Post',
            'posts' => $user->Posts,
        ]
        ); 

});
Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Post categories',
        'categories' => Category::all()

    ]);

});
//--------------------------

