<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        dd('test'); //404Notfound対策として追加
        //Eloquent(エロクアント)
        $values = Test::all();

        $count = Test::count(); //数字
        $first = Test::findOrFail(1); //インスタンス
        $whereBBB = Test::where('text', '=', 'bbb')->get(); //Eloquent/Builder
        

        //クエリビルダ
        //コレクション型
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')->select('id', 'text')->get();

        // dd($values, $count, $first, $whereBBB, $queryBuilder);

        return view('tests.test', compact('values'));
    }
}
