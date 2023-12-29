<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if(authCheck()){
            return redirect()->route('website.dashboard');
        }

        return view('frontend.auth.login');
    }

    public function register(){
        return view('frontend.auth.register');
    }

    public function logout(){
        Auth::guard('user')->logout();
        return redirect()->route('website.login');
    }
}

