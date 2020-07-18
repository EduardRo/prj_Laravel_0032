<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Show posts
    public function show($post, $age = null)
    {
        $posts = [
            'first-post' => 'This is the first post and you have the text',
            'second-post' => 'This is the second post'
        ];
        if (!$age) {
            $age = "";
        }

        if (!array_key_exists($post, $posts)) {
            abort(404, "Sorry, this post doesn't exist!");
        }

        return view('post', ['post' => $posts[$post], 'age' => $age]);
    }
}
