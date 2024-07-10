<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Summary of index
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function index()
    {
        // get all posts
        $posts = Post::all();

        // return the view
        return inertia('Posts/Index', [
            'posts' => $posts
        ]);
    }
}
