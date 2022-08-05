<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::all();

        // dump($post); 

        return view('posts.show', ['post' => $post[$id - 1]]);
    }

    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }
 
    public function create()
    {
        return view('posts.create');
    }
}
