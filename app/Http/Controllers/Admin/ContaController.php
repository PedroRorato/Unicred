<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Hash;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function show(){
        $element = User::findOrFail(Auth::user()->id);
        return view('dashboard.conta.show', compact('element'));
    }

    public function update(Request $request){
        $element = User::findOrFail(Auth::user()->id);
        if($request->has('password')){
            request()->validate([
                'password' => ['required', 'string', 'min:5', 'confirmed'],
            ]);
            $element->password = Hash::make(request('password'));
            $element->save();
            return redirect('/admin/conta')->withMessage("Senha alterada com sucesso!");
        }
        request()->validate([
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::user()->id)->where(function ($query) {
                return $query->where('status', 'ATIVO');
            })],
            'name' => ['required', 'string', 'min:2', 'max:20']
        ]);
        $element->email = request('email');
        $element->name = request('name');
        $element->save();
        return redirect('/admin/conta')->withMessage("Conta alterado com sucesso!");
    }
}
