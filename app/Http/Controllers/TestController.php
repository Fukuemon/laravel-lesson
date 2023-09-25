<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $values = Test::all(); // 全て取得

        // dd($values); // 値を確認したい時に利用する(dieとvar_dumpの合わせ技)

        return view("tests.test", compact("values")); // compact関数でviewに渡す
    }
}
