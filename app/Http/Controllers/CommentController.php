<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function index() {
        $post = Post::find(1);
        $dd($post->comments);
        return view('comments.comment', compact('post'));
    }
    //
}
