<?php

namespace App\Http\Controllers\Admin;

use App\Projeto;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auxiliar\ImagemController;
use Illuminate\Http\Request;

class ProjetosController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        //Filters
        $elements = new Projeto;
        $elements = $elements->where('status', 'ATIVO');
        $amount = $elements->get()->count();
        $elements = $elements->orderBy('created_at', 'asc')->paginate(25)->appends(['amount' => $amount]);
        return view('dashboard.projetos.index', compact('elements', 'amount'));
    }

    public function create(){
        return view('dashboard.projetos.create');
    }

    public function store(Request $request){
        //Validation
        request()->validate([
            'categoria' => ['required', 'string', 'min:3', 'max:30'],
            'foto' => ['required', 'image', 'mimes:jpeg,jpg,png', 'dimensions:min_width=1000,min_height=500', 'max:10000'],
            'texto' => ['required', 'string', 'min:5'],
            'titulo' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        //Guarda foto
        $auxiliar = new ImagemController;
        $filename = $auxiliar->storage(request('foto'), '/projetos/');
        //Create
        Projeto::create([
            'categoria' => request('categoria'),
            'foto' => $filename,
            'texto' => request('texto'),
            'titulo' => request('titulo'),
        ]);

        return redirect('/admin/projetos')->withMessage("Projeto criado com sucesso!");
    }

    public function show($id){
        $element = Projeto::findOrFail($id);
        //dd($element);
        return view('dashboard.projetos.show', compact('element'));
    }

    public function update(Request $request, $id){
        //Validation
        request()->validate([
            'categoria' => ['required', 'string', 'min:3', 'max:30'],
            'foto' => ['image', 'mimes:jpeg,jpg,png', 'dimensions:min_width=1000,min_height=500', 'max:10000'],
            'texto' => ['required', 'string', 'min:5'],
            'titulo' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $element = Projeto::findOrFail($id);
        if($request->hasFile('foto')){
            //Guarda foto
            $auxiliar = new ImagemController;
            $filename = $auxiliar->storage(request('foto'), '/projetos/');
            //Update
            $element->categoria = request('categoria');
            $element->foto = $filename;
            $element->texto = request('texto');
            $element->titulo = request('titulo');
            $element->save();
        } else{
            //Update
            $element->categoria = request('categoria');
            $element->texto = request('texto');
            $element->titulo = request('titulo');
            $element->save();
        }
        //Redirect
        return redirect('/admin/projetos/'.$id)->withMessage("Edição realizada com sucesso!");
    }

    public function destroy($id){

        $element = Projeto::findOrFail($id);
        //Update
        $element->status = "EXCLUIDO";
        $element->save();
        //Redirect
        return redirect('/admin/projetos')->withMessage("Projeto excluído com sucesso!");
    }
}
