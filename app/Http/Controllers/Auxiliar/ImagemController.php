<?php

namespace App\Http\Controllers\Auxiliar;

use File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ImagemController extends Controller
{
    public function storage($foto, $place){
        //get file extension
        $extension = $foto->getClientOriginalExtension();
        //filename to store
        $filenametostore = md5(time()).'.'.$extension;
        $foto->storeAs('public/'.$place, $filenametostore);
        //Return
        return $filenametostore;
    }
}
