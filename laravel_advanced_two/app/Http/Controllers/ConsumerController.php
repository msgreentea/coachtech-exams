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
        // $name = request('name');
        // $email = request('email');
        $post = new Item;
        // $post->name = $request->name;
        // $post->email = $request->email;
        // $post->save();
        $posts = Item::all();
        // $item = Item::orderBy('name', 'asc')->get();
        // ↓insertしたItemのデータを使いたい場合
        // dd($model->name) <-結果：testname

        // return view('thanks', ['posts' => $posts]);
        return view('thanks', compact('posts'));
    }
    // public function show(Request $request)
    // {
    //     return view('thanks');
    // }
}