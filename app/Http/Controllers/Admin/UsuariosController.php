<?php

namespace App\Http\Controllers\Admin;

use Hash;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        //Filters
        $elements = new User;
        $elements = $elements->where('status', 'ATIVO')->where('id', '!=', auth()->user()->id);
        $amount = $elements->get()->count();
        $elements = $elements->orderBy('created_at', 'asc')->paginate(25)->appends(['amount' => $amount]);
        return view('dashboard.usuarios.index', compact('elements', 'amount'));
    }

    public function create(){
        return view('dashboard.usuarios.create');
    }

    public function store(Request $request){
        //Validation
        request()->validate([
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->where(function ($query) {
                return $query->where('status', 'ATIVO');
            })],
            'name' => ['required', 'string', 'min:2', 'max:20'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
        //Create
        User::create([
            'email' => request('email'),
            'name' => request('name'),
            'password' => Hash::make(request('password')),
        ]);
        return redirect('/admin/usuarios')->withMessage("Usuário criado com sucesso!");
    }

    public function show($id){
        $element = User::findOrFail($id);
        //dd($element);
        return view('dashboard.usuarios.show', compact('element'));
    }

    public function update(Request $request, $id){
        $element = User::findOrFail($id);
        if($request->has('password')){
            request()->validate([
                'password' => ['required', 'string', 'min:5', 'confirmed'],
            ]);
            $element->password = Hash::make(request('password'));
            $element->save();
            //Redirect
            return redirect('/admin/usuarios/'.$id)->withMessage("Senha alterada com sucesso!");
        }
        request()->validate([
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)->where(function ($query) {
                return $query->where('status', 'ATIVO');
            })],
            'name' => ['required', 'string', 'min:2', 'max:20']
        ]);
        $element->email = request('email');
        $element->name = request('name');
        $element->save();
        //Redirect
        return redirect('/admin/usuarios/'.$id)->withMessage("Usuário alterado com sucesso!");
    }

    public function destroy($id){

        $element = User::findOrFail($id);
        //Update
        $element->status = "EXCLUIDO";
        $element->save();
        //Redirect
        return redirect('/admin/usuarios')->withMessage("Usuário excluído com sucesso!");
    }
}
