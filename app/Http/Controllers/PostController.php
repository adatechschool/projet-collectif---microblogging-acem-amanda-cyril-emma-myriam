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

    public function store(Request $request) {
        // 1. La validation
        $this->validate($request, [
            'title' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "content" => 'bail|required',
        ]);
    
        // 2. On upload l'image dans "/storage/app/public/posts"
        $chemin_image = $request->picture->store("posts");
    
        // 3. On enregistre les informations du Post
        Post::create([
            "title" => $request->title,
            "picture" => $chemin_image,
            "content" => $request->content,
        ]);
    
        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect(route("posts.index"));
    }
    
    public function show($id)
    {
        $post = Post::all();

        // dump($post); 

        return view('posts.show', ['post' => $post[$id - 1]]);
    }

    // Permet de restreindre les accès si on est pas logué : utilise PostPolicy.php dans app/Policies
    // public function __construct()
    // {
    //     $this->authorizeResource(Post::class, 'post');
    // }
 

}
