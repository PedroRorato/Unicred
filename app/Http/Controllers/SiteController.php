<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Evento;
use App\Noticia;
use App\Projeto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SiteController extends Controller
{

    public function home()
    {
        //Eventos
        $eventos = new Evento;
        $eventos = $eventos->where('status', 'ATIVO')->limit(3)->get();
        //Notícias
        $noticias = new Noticia;
        $noticias = $noticias->where('status', 'ATIVO')->limit(3)->get();
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.home', compact('eventos', 'noticias'));
    }

    public function quemSomos()
    {
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.quem-somos');
    }

    public function projetos()
    {
        //Eventos
        $elements = new Projeto;
        $elements = $elements->where('status', 'ATIVO')->get();
        return view('site.projetos', compact('elements'));
    }

    public function showProjeto($id)
    {
        $elements = new Projeto;
        $elements = $elements->where('status', 'ATIVO')->where('id', '!=', $id)->limit(10)->get();
        $object = Projeto::findOrFail($id);
        return view('site.projeto', compact('elements', 'object'));
    }

    public function eventos()
    {
        //Eventos
        $elements = new Evento;
        $elements = $elements->where('status', 'ATIVO')->get();
        return view('site.eventos', compact('elements'));
    }

    public function showEvento($id)
    {
        $elements = new Evento;
        $elements = $elements->where('status', 'ATIVO')->where('id', '!=', $id)->limit(10)->get();
        $object = Evento::findOrFail($id);
        return view('site.evento', compact('elements', 'object'));
    }

    public function noticias()
    {
        //Eventos
        $elements = new Noticia;
        $elements = $elements->where('status', 'ATIVO')->get();
        return view('site.noticias', compact('elements'));
    }

    public function showNoticia($id)
    {
        $elements = new Noticia;
        $elements = $elements->where('status', 'ATIVO')->where('id', '!=', $id)->limit(10)->get();
        $object = Noticia::findOrFail($id);
        return view('site.noticia', compact('elements', 'object'));
    }

    public function iParceiras()
    {
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.i-parceiras');
    }

    public function contato()
    {
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.contato');
    }
}
