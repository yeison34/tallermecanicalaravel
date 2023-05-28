<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(){
        return view('Login.login');
        
    }

    public function RegistroLogin(){
        return view('Login.registrologin');
        
    }

    public function Principal(){
        return view('Login.principal');
        
    }
}
