<?php

namespace App\Http\Controllers\Admin;

use App\Evento;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auxiliar\ImagemController;
use Illuminate\Http\Request;

class EventosController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        //Filters
        $elements = new Evento;
        $elements = $elements->where('status', 'ATIVO');
        $amount = $elements->get()->count();
        $elements = $elements->orderBy('created_at', 'asc')->paginate(25)->appends(['amount' => $amount]);
        return view('dashboard.eventos.index', compact('elements', 'amount'));
    }

    public function create(){
        return view('dashboard.eventos.create');
    }

    public function store(Request $request){
        //Validation
        request()->validate([
            'foto' => ['required', 'image', 'mimes:jpeg,jpg,png'],
            'texto' => ['required', 'string', 'min:5'],
            'titulo' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        //Guarda foto
        $auxiliar = new ImagemController;
        $filename = $auxiliar->storage(request('foto'), '/eventos/');
        //Create
        Evento::create([
            'foto' => $filename,
            'texto' => request('texto'),
            'titulo' => request('titulo'),
        ]);

        return redirect('/admin/eventos')->withMessage("Evento criado com sucesso!");
    }

    public function show($id){
        $element = Evento::findOrFail($id);
        //dd($element);
        return view('dashboard.eventos.show', compact('element'));
    }

    public function update(Request $request, $id){
        //Validation
        request()->validate([
            'foto' => ['image', 'mimes:jpeg,jpg,png'],
            'texto' => ['required', 'string', 'min:5'],
            'titulo' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $element = Evento::findOrFail($id);
        if($request->hasFile('foto')){
            //Guarda foto
            $auxiliar = new ImagemController;
            $filename = $auxiliar->storage(request('foto'), '/eventos/');
            //Update
            $element->foto = $filename;
            $element->texto = request('texto');
            $element->titulo = request('titulo');
            $element->save();
        } else{
            //Update
            $element->texto = request('texto');
            $element->titulo = request('titulo');
            $element->save();
        }
        //Redirect
        return redirect('/admin/eventos/'.$id)->withMessage("Edição realizada com sucesso!");
    }

    public function destroy($id){

        $element = Evento::findOrFail($id);
        //Update
        $element->status = "EXCLUIDO";
        $element->save();
        //Redirect
        return redirect('/admin/eventos')->withMessage("Evento excluído com sucesso!");
    }
}
