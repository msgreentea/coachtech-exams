<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;

// Route::get('/building', [ExamController::class, 'index');
// Route::get('/building/{room}', [ExamController::class, 'param');
Route::get('/building/{room}', funcion() {
    return view('room');
});