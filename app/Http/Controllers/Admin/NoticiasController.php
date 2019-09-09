<?php

namespace App\Http\Controllers\Admin;

use App\Noticia;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auxiliar\ImagemController;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request){
        //Filters
        $elements = new Noticia;
        $elements = $elements->where('status', 'ATIVO');
        $amount = $elements->get()->count();
        $elements = $elements->orderBy('created_at', 'asc')->paginate(25)->appends(['amount' => $amount]);
        return view('dashboard.noticias.index', compact('elements', 'amount'));
    }

    public function create(){
        return view('dashboard.noticias.create');
    }


    public function store(Request $request){
        //Validation
        request()->validate([
            'foto' => ['required', 'image', 'mimes:jpeg,jpg,png', 'dimensions:min_width=1000,min_height=500', 'max:10000'],
            'texto' => ['required', 'string', 'min:5'],
            'titulo' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        //Guarda foto
        $auxiliar = new ImagemController;
        $filename = $auxiliar->storage(request('foto'), '/noticias/');
        //Create
        Noticia::create([
            'foto' => $filename,
            'texto' => request('texto'),
            'titulo' => request('titulo'),
        ]);

        return redirect('/admin/noticias')->withMessage("Noticia criada com sucesso!");
    }


    public function show($id){
        $element = Noticia::findOrFail($id);
        //dd($element);
        return view('dashboard.noticias.show', compact('element'));
    }


    public function update(Request $request, $id){
        //Validation
        request()->validate([
            'foto' => ['image', 'mimes:jpeg,jpg,png', 'dimensions:min_width=1000,min_height=500', 'max:10000'],
            'texto' => ['required', 'string', 'min:5'],
            'titulo' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $element = Noticia::findOrFail($id);
        if($request->hasFile('foto')){
            //Guarda foto
            $auxiliar = new ImagemController;
            $filename = $auxiliar->storage(request('foto'), '/noticias/');
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
        return redirect('/admin/noticias/'.$id)->withMessage("Edição realizada com sucesso!");
    }


    public function destroy($id){

        $element = Noticia::findOrFail($id);
        //Update
        $element->status = "EXCLUIDO";
        $element->save();
        //Redirect
        return redirect('/admin/noticias')->withMessage("Noticia excluída com sucesso!");
    }
}
