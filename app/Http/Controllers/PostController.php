<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class PostController extends Controller
{
    public function show($id)
    {
        auth()->loginUsingId(1);

        $post = Post::findOrFail($id);

        $this->authorize('update', $post);

        // if (Gate::denies('show-post', $post)) {
        //     abort('403', 'Sorry, not sorry');
        // }

        return view('posts.show', compact('post'));
    }
}
