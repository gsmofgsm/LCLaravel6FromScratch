<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug', $slug)->first();

        if (! $post) {
            abort(404, 'Post does not exist');
        }

        return view('post', [
            'post' => $post
        ]);
    }
}
