<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // Eloquant ORM
        $values = Test::all(); // 全て取得
        $count = Test::count(); // レコード数を取得
        $first = Test::findOrFail(1); // idが1のレコードを取得
        $whereBBB = Test::where('text', '=', 'BBB')->get(); // レコードの中からtextがBBBのレコードを取得

        // クエリビルダ：SQL文を直接書く

        $queryBuilder = DB::table('tests')->where('text', '=', 'てすと') // レコードの中からtextがてすとのレコードを取得
        ->select('id', 'text') // idとtextのみ取得
        ->get(); // レコードの中からtextがてすとのレコードを取得


        dd($values, $count, $first , $whereBBB, $queryBuilder); // 値を確認したい時に利用する(dieとvar_dumpの合わせ技)

        return view("tests.test", compact("values")); // compact関数でviewに渡す
    }
}
