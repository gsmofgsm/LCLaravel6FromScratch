<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Hello, this is my very first post',
            'my-second-post' => 'I am really getting the hang of this post thing'
        ];

        if (! array_key_exists($post, $posts)) {
            abort(404, 'Sorry, this post does not exist yet');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
