<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function posts(): View
    {
        // $posts = Post::paginate(10);
        
        //With N+1 Query Problem
        // $posts = Post::all();

        //Correct way with eager loading
        $posts = Post::with('user')->get();

        //other way
        // $posts = Post::all();
        // $posts->load('user');
        return view('posts', compact('posts'));
    }
}
