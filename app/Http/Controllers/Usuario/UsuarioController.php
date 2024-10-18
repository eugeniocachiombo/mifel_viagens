<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   
    public function cadastrar(){
        return view("usuario.cadastro");
    }

    public function logar() {
        return view('usuario.login');
    }

    public function irEmInicio() {
        return view('pagina_inicial.index');
    }
}
