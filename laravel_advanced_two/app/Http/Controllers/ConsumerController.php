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
        $items = item::all();
        // Item::all($form);
        return view('thanks', ['items' => $items]);
    }
    public function show(Request $request)
    {
        return view('thanks');
    }
}