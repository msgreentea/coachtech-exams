<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //DBとしてDBクラスを利用できるようにする
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function thanks(Request $request)
    {
        DB::insert('insert into second_users (name, email) values (:name, :email)');
        $param = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        // return redirect('/');
        return view('thanks', ('param'));
    }
}