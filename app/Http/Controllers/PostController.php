<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 

class PostController extends Controller
{
    public function show()
    {
    $post = Post::all(); 
    //dump($posts); 
    
    return view('posts.show', ['post' => $post[0]]);
    }
}
