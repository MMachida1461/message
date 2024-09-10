<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class RequestController extends Controller
{
    public function getString(){
        $input = Message::inRandomOrder()->first();

        // $input = array("ネオ", "モーフィアス", "トリニティ", "サイファー", "タンク");
        // shuffle($input);
        var_dump($input->id);
        var_dump($input->message);
        return view('result', ['result' => $input]);
    }
}
