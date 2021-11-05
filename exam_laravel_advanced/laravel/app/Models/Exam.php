<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function index()
    {
        $param = Exam::all();
        return view('index', ['param' => $param]);
    }
}