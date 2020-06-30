<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form_register(){
        return view('form');
    }

    public function welcome(Request $request){
        return view('welcome', ['nama'=>$request]);
    }
}
