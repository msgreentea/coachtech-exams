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
        $items = item::all();
        return view('thanks', ['items' => $items]);
    }
    // public function show(Request $request)
    // {
    // }
}