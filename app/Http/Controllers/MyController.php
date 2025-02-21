<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function Xinchao(){
        $a = 5;
        return view('hello',['kq'=>$a]);
        // return view('hello'), compact('a'); tên biến

        // return view('hello')->with
        //(['a' => $a]); tên biến

        // return view('hello');
    }
    
    function Form(){
        return view('form');
    }
}
