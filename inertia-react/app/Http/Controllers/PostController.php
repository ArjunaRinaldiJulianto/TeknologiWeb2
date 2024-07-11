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
    
    public function create()
    {
        return inertia ('Posts/Create');
    }
    
    /**
     * Summary of store
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store (Request $request)
    {
        //set validation
        $request->validate([
            'title' => 'required', 
            'content' => 'required',
        ]);

        //create post
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        
        //redirect
        return redirect()->route('posts.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Summary of edit
     * @param Post $post
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function edit (Post $post)
    {
        return inertia('Posts/Edit', [
            'post' => $post,
        ]);
    }
    
    /**
     * Summary of update
     * @param Request $request
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        //set validation
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        //update post
        $post->update([
            'title'=> $request->title,
            'content' => $request->content
        ]);

        //redirect
        return redirect()->route('posts.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Summary of destroy
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        //delete post
        $post->delete();

        //redirect
        return redirect()->route('posts.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
