<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return Inertia::render('Post/Index', ['posts' => $posts]);
    }
    
    public function create()
    {
        return Inertia::render('Post/Create');
    }
    
    public function store(Request $request)
    {
        $post = new Post($request->all());
        # Si no funca  $request::all()
        $post->save();
        return redirect()->route('posts.index');
    }       
}



