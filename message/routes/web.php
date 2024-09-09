<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/getString', function(){
    $result = '結果';
    return view('result', ['result' => $result]);
});