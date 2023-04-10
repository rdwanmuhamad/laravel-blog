<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/categories', function(){
    return view('pages.categories', [
        'title' => 'Post Category',
        'categories' => Category::all(),
    ]);
});

Route::get('/category/{category:slug}', function(Category $category) {
    return view('pages.category', [
        'category' => $category->name,
        'title' => $category->name,
        'posts' => $category->posts->load('category', 'user'),
        'name' => $category->name
    ]);
});

Route::get('/author/{user:username}', function(User $user) {
    return view('pages.user', [
        'title' => 'User Post',
        'user' => $user->name,
        'posts' => $user->posts->load('category', 'user'),
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
