<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();

        return view('posts.index')
            ->with('allPosts', $allPosts);
    }

    /**
     * @param $post_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function show($post_id)
    {
        $post = Post::where('id', $post_id)->first();

        if (!$post) {
            throw new \Exception('Post not found.');
        }

        return view('posts.show')
            ->with('post', $post);
    }
}
