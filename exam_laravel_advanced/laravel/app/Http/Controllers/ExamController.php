<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //DBとしてDBクラスを利用できるようにする
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        DB::insert('insert into users (name, email) values (:name, :email)');
        return view('thanks');
    }
    public function thanks(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        // return redirect('/');
        return view('thanks');
        return view('thanks', ('param'));
    }
}