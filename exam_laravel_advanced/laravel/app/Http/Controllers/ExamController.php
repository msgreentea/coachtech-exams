<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //DBとしてDBクラスを利用できるようにする

class ExamController extends Controller
{
    public function index()
    {
        DB::insert('insert into authors (name, email) values (:name, :email)');
        return view('thanks');
    }
    public function thanks()
    // {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
        ];
    //     return redirect('/');
    // return view('post');
    }
}