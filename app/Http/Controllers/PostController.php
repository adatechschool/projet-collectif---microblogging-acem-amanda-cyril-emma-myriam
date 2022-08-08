<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 

class PostController extends Controller
{

    public function index() {
        //On récupère tous les Post
        $posts = Post::latest()->get();
    
        // On transmet les Post à la vue
        return view("posts.index", compact("posts"));
    }

    public function create()
    {
        return view('posts.create');
    }
    

    public function show($id)
    {
        $post = Post::all();

        // dump($post); 

        return view('posts.show', ['post' => $post[$id - 1]]);
    }

    // public function __construct()
    // {
    //     $this->authorizeResource(Post::class, 'post');
    // }
 
}
