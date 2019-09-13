<?php

namespace App\Http\Controllers\Admin;

use App\Evento;
use App\InstParceira;
use App\Mantenedor;
use App\Noticia;
use App\Projeto;
use App\User;
use App\Http\Controllers\Controller;

class InicialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Eventos
        $eventos = new Evento;
        $eventos = $eventos->where('status', 'ATIVO')->get()->count();
        //InstParceiras
        $inst = new InstParceira;
        $inst = $inst->where('status', 'ATIVO')->get()->count();
        //Mantenedor
        $mantenedores = new Mantenedor;
        $mantenedores = $mantenedores->where('status', 'ATIVO')->get()->count();
        //Noticias
        $noticias = new Noticia;
        $noticias = $noticias->where('status', 'ATIVO')->get()->count();
        //Projetos
        $projetos = new Projeto;
        $projetos = $projetos->where('status', 'ATIVO')->get()->count();
        //Users
        $users = new User;
        $users = $users->where('status', 'ATIVO')->get()->count();
        //Return
        return view('dashboard.index', compact('eventos', 'inst', 'mantenedores', 'noticias', 'projetos', 'users'));
    }
}
