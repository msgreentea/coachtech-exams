<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\ItemRequest;

class ConsumerController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register(ItemRequest $request)
    {
        // 重複を防止するやつ？
        // \DB::beginTransaction();
        // try {
        //     $item = Item::create($show);
        //     \DB::commit();
        // } catch (\Throwable $e) {
        //     \DB::rollback();
        // }

        // dd($request->all());

        $posts = new Item;
        $posts->name = $request->name;
        $posts->email = $request->email;

        $validation = [
            'name' => 'required',
            'email' => 'required | max:30'
        ];
        $this->validate($request, $validation);
        return view('thanks', compact('posts'));
    }
}