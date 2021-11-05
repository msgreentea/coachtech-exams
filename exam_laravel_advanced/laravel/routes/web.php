<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;


Route::get('/index', [ExamController::class, 'index']);
Route::get('/thanks', [ExamController::class, 'thanks']);