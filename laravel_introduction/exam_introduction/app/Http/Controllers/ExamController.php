<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return "建物です";
    }
    public function param()
    {
        return "部屋番号は" . $room . "です";
        // return "部屋番号は" . $room . "です";
    }
}