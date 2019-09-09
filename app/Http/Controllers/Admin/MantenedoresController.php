<?php

namespace App\Http\Controllers\Admin;

use App\Mantenedor;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auxiliar\ImagemController;
use Illuminate\Http\Request;

class MantenedoresController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        //Filters
        $elements = new Mantenedor;
        $elements = $elements->where('status', 'ATIVO');
        $amount = $elements->get()->count();
        $elements = $elements->orderBy('created_at', 'asc')->paginate(25)->appends(['amount' => $amount]);
        return view('dashboard.mantenedores.index', compact('elements', 'amount'));
    }

    public function create(){
        return view('dashboard.mantenedores.create');
    }

    public function store(Request $request){
        //Validation
        request()->validate([
            'foto' => ['required', 'image', 'mimes:jpeg,jpg,png'],
            'texto' => ['required', 'string', 'min:5'],
            'nome' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        //Guarda foto
        $auxiliar = new ImagemController;
        $filename = $auxiliar->storage(request('foto'), '/mantenedores/');
        //Create
        Mantenedor::create([
            'foto' => $filename,
            'texto' => request('texto'),
            'nome' => request('nome'),
        ]);

        return redirect('/admin/mantenedores')->withMessage("Mantenedor criado com sucesso!");
    }

    public function show($id){
        $element = Mantenedor::findOrFail($id);
        //dd($element);
        return view('dashboard.mantenedores.show', compact('element'));
    }

    public function update(Request $request, $id){
        //Validation
        request()->validate([
            'foto' => ['image', 'mimes:jpeg,jpg,png'],
            'texto' => ['required', 'string', 'min:5'],
            'nome' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $element = Mantenedor::findOrFail($id);
        if($request->hasFile('foto')){
            //Guarda foto
            $auxiliar = new ImagemController;
            $filename = $auxiliar->storage(request('foto'), '/mantenedores/');
            //Update
            $element->foto = $filename;
            $element->texto = request('texto');
            $element->nome = request('nome');
            $element->save();
        } else{
            //Update
            $element->texto = request('texto');
            $element->nome = request('nome');
            $element->save();
        }
        //Redirect
        return redirect('/admin/mantenedores/'.$id)->withMessage("Edição realizada com sucesso!");
    }

    public function destroy($id){

        $element = Mantenedor::findOrFail($id);
        //Update
        $element->status = "EXCLUIDO";
        $element->save();
        //Redirect
        return redirect('/admin/mantenedores')->withMessage("Mantenedor excluído com sucesso!");
    }
}
