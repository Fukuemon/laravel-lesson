<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        // Eloquant ORM
        $values = Test::all(); // 全て取得
        $count = Test::count(); // レコード数を取得
        $first = Test::findOrFail(1); // idが1のレコードを取得
        $whereBBB = Test::where('text', '=', 'BBB')->get(); // レコードの中からtextがBBBのレコードを取得

        dd($values, $count, $first , $whereBBB); // 値を確認したい時に利用する(dieとvar_dumpの合わせ技)

        return view("tests.test", compact("values")); // compact関数でviewに渡す
    }
}
