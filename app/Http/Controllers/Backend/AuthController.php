<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if(authCheck()){
            return to_route('website.user.dashboard');
        }

        if(authCheck('admin')){
            return to_route('admin.dashboard');
        }

        return view('backend.auth.login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return to_route('admin.login');
    }
}
