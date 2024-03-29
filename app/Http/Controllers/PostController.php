<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   public function index()
   {
     $posts = Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString();
     return view('pages.post', [
      'posts' => $posts
     ]);
   }

   public function show(Post $post){
      $post = Post::find($post->id);
      return view('pages.single-post',[
        'post' => $post
    ]);
   }
}
