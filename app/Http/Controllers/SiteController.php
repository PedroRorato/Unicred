<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Evento;
use App\Noticia;
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
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.projetos');
    }

    public function showProjeto($id)
    {
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.projeto');
    }

    public function eventos()
    {
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.eventos');
    }

    public function noticias()
    {
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.noticias');
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
