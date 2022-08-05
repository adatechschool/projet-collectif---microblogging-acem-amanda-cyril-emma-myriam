<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 

class PostController extends Controller
{
    public function show($id)
    {
    $post = Post::all(); 
<<<<<<< HEAD
   // dump($post); 
    
    return view('posts.show', ['post' => $post[$id - 1]]);
    }
}
=======
    //dump($posts); 
    
    return view('posts.show', ['post' => $post[$id - 1]]);
    }
}
>>>>>>> d7b122b2fe8d025057ae2c3d9b52852985fe8ca5
