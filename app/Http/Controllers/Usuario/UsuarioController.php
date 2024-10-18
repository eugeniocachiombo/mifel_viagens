<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
   
    public function cadastrar(){
        return view("usuario.cadastro");
    }

    public function logar() {
        return view('usuario.login');
    }

    public function actualizarDados() {
        //return view('usuario.login');
    }

    public function irEmInicio() {
        return view('pagina_inicial.index');
    }

    public function sair() {
        Auth::logout();
        return redirect()->route("usuario.pagina_inicial");
    }

    public function alterarSenha(){
        return view('usuario.alterar-senha');
    }
}
