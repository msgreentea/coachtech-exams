<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumerController;


// トップページ
Route::get('/', [ConsumerController::class, 'index'])->name('home');
// 入力、お問い合わせ完了ページ
Route::post('/register', [ConsumerController::class, 'register']);