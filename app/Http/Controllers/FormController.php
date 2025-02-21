<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function Form(){
        return view('form');
    }
    function XulyForm(Request $req){
        $sum = $req->numA + $req->numB;
        return view('form',['kq'=>$sum]);
    }
}
