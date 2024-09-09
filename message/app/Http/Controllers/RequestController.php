<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function getString(){
        $result = 'Requestで取得した結果';
        return view('result', ['result' => $result]);
    }
}
