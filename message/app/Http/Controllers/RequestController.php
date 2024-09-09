<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function getString(){
        $input = array("ネオ", "モーフィアス", "トリニティ", "サイファー", "タンク");
        shuffle($input);
        return view('result', ['result' => $input]);
    }
}
