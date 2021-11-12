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
    public function register()
    {
        // $recipe = App\Recipe::create(['recipe_name' => 'カレーライス']);
        // laravel応用７章参照した
        // $items = item::all();
        // Item::all($form);

        $name = request('name');
        $email = request('email');
        $post = new Item;
        $posts = Item::all();
        // $item = Item::orderBy('name', 'asc')->get();
        // ↓insertしたItemのデータを使いたい場合
        // dd($model->name) <-結果：testname

        // return view('thanks', ['posts' => $posts]);
        return view('thanks', compact('posts'));
    }
    public function show(Request $request)
    {
        return view('thanks');
    }
}