<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('pages.about', [ 
        'name' => 'Muhamad Ridwan',
        'email' => 'mrdwn624@gmail.com',
        'image' => 'rdwanmuhamad.jpg',
    ]);
});

Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('posts');

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('pages.category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'name' => $category->name
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
