<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $values = Post::all(); // 全て取得

        // dd($values); // 値を確認したい時に利用する(dieとvar_dumpの合わせ技)

        return view("posts.post", compact("values")); // compact関数でviewに渡す
    }
}
