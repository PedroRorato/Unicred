<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SiteController extends Controller
{

    public function home()
    {
        //return view('site.home', compact('ab_p', 'ab_n', 'a_p', 'a_n', 'b_p', 'b_n', 'o_p', 'o_n', 'nn'));
        return view('site.home');
    }
}
