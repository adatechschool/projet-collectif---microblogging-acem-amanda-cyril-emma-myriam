<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Auth; 

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

    public function store(Request $request) {
        // 1. La validation
        $this->validate($request, [
            "img_url" => 'bail|required|image|max:1024',
            "description" => 'bail|required',
        ]);
    
        // 2. On upload l'image dans "/storage/app/public/posts"
        $chemin_image = $request->img_url->store("/storage/app/public"); //A MODIFIER ? 
    
        // 3. On enregistre les informations du Post
        Post::create([
            "img_url" => $chemin_image,
            "description" => $request->description,
            "user_id"=> Auth::user()->id,
        ]);
    
        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect(route("posts.index"));
    }


    public function show(Post $post)
    {
        // $post = Post::all();

        // dump($post); 
        echo asset('storage/depositphotos_2186038-stock-photo-kitten-lays-isolated.jpg');
        return view('posts.show', ['post' => $post]);
    }


 
}
