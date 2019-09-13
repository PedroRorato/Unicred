<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function __construct(){
        //$this->middleware('guest');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
