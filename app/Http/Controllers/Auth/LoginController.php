<?php

namespace App\Http\Controllers\Auth;

use Auth;
use DB;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function showLoginForm(){
        //Return
        return view('auth.login');
    }

    public function login(Request $request){
        //Filter
        $this->validate($request, [
            'email' => ['required', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:5'],
        ]);
        //Checar tipo
        $users = DB::table('users')->where('email', '=', request('email'))->where('status', '=', 'ATIVO')->first();
        if($users){
            if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect('/admin');
            }
        }
        return redirect()->back()->withInput($request->only('email'))->withMessage("msg");
    }
}
