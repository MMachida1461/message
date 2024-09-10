<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

//index.blabe.phpの取得
Route::get('/', function () {
    return view('index');
});

//ボタンからgetStringページへの遷移
Route::get('/getString', [RequestController::class, 'getString']);