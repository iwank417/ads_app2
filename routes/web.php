<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
        "title" => "Home",
        "active" => 'home'
        ]);
});

Route::get('/about', function () {
    return View('about',[
        "title" => "About",
        'active' => 'about',
        "name" => "ridwan agus",
        "email" => "ridwan_agus@gmail.com",
        "image" => "iwank.jpg"



        ]);
});

Route::get('/blog', [PostController::class,'index']);
// halaman single post -------
Route::get('post/{post:slug}',[PostController::class,'show'] );
//----------------------------------------------------
Route::get('/categories',function(){

    return view('categories',[
        'title' =>'Post categories',
        'active' => 'categori',
        //'posts' => $category->posts,
        'categories' => Category::all()

    ]);



});


Route::get('/categories/{category:slug}',function(Category $category){
    return view('blog',[
        'title' => "Post By Category : $category->name",
        'active' => 'categori',
        'posts' => $category -> Posts->load('category','author')
        
    ]);

});
Route::get('/author/{author:username}',function(User $author){

    return view('blog' ,[
            'title' => "Post By Author : $author->username",
            'active' => 'categori',
            'posts' => $author-> Post->load('category','author')
        ]); 
});

Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);
//--------------------------

