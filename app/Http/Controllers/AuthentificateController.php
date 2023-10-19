<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificateController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function registre(){
        return view('auth.registre');
    }
}
