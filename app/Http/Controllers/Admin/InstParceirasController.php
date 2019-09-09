<?php

namespace App\Http\Controllers\Admin;

use App\InstParceira;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auxiliar\ImagemController;
use Illuminate\Http\Request;

class InstParceirasController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        //Filters
        $elements = new InstParceira;
        $elements = $elements->where('status', 'ATIVO');
        $amount = $elements->get()->count();
        $elements = $elements->orderBy('created_at', 'asc')->paginate(25)->appends(['amount' => $amount]);
        return view('dashboard.i-parceiras.index', compact('elements', 'amount'));
    }

    public function create(){
        return view('dashboard.i-parceiras.create');
    }

    public function store(Request $request){
        //Validation
        request()->validate([
            'foto' => ['required', 'image', 'mimes:jpeg,jpg,png', 'dimensions:min_width=1000,min_height=500', 'max:10000'],
            'texto' => ['required', 'string', 'min:5'],
            'nome' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        //Guarda foto
        $auxiliar = new ImagemController;
        $filename = $auxiliar->storage(request('foto'), '/i-parceira/');
        //Create
        InstParceira::create([
            'foto' => $filename,
            'texto' => request('texto'),
            'nome' => request('nome'),
        ]);

        return redirect('/admin/instituicoes-parceiras')->withMessage("Instituição Parceira criada com sucesso!");
    }

    public function show($id){
        $element = InstParceira::findOrFail($id);
        //dd($element);
        return view('dashboard.i-parceiras.show', compact('element'));
    }

    public function update(Request $request, $id){
        //Validation
        request()->validate([
            'foto' => ['image', 'mimes:jpeg,jpg,png', 'dimensions:min_width=1000,min_height=500', 'max:10000'],
            'texto' => ['required', 'string', 'min:5'],
            'nome' => ['required', 'string', 'min:3', 'max:255'],
        ]);
        $element = InstParceira::findOrFail($id);
        if($request->hasFile('foto')){
            //Guarda foto
            $auxiliar = new ImagemController;
            $filename = $auxiliar->storage(request('foto'), '/i-parceiras/');
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
        return redirect('/admin/instituicoes-parceiras/'.$id)->withMessage("Edição realizada com sucesso!");
    }

    public function destroy($id){

        $element = InstParceira::findOrFail($id);
        //Update
        $element->status = "EXCLUIDO";
        $element->save();
        //Redirect
        return redirect('/admin/i-parceiras')->withMessage("Instituição Parceira excluída com sucesso!");
    }
}
