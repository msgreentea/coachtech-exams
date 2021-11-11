<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ConsumerController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register(Request $request)
    {
        // $recipe = App\Recipe::create(['recipe_name' => 'カレーライス']);
        // laravel応用７章参照した
        // $items = item::all();
        // Item::all($form);

        // Itemのmodelクラスのインスタンスを生成
        $item = new Item();
        // データベースに値をinsert。
        $item->create([
            'name' => 'testname',
            'email' => 'test@gmail.com'
        ]);
        // ↓保存したデータを$modelに格納。バージョン
        // $model = $user->create([
        //     'name' => 'testname',
        //     'email' => 'test@gmail.com'
        // ]);
        // ↓insertしたItemのデータを使いたい場合
        // dd($model->name) <-結果：testname

        return view('thanks', ['item' => $item]);
    }
    public function show(Request $request)
    {
        return view('thanks');
    }
}
