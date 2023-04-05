<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   public function index()
   {
     return view('pages.post',[
        'posts' => Post::all()
     ]);
   }

   public function show($slug){
    return view('pages.single-post',[
        'post' => Post::find($slug)
    ]);
   }
}
