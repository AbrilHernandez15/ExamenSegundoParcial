<?php

namespace App\Http\Controllers;

use App\Http\Requests\validador;
use Illuminate\Http\Request;

class controlador extends Controller
{
    public function consulta(){
        return view('consulta');
    }

    public function formulario(){
        return view('formulario');
    }

    public function validador(validador $request){
        
    }
}
