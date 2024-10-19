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

    public function actualizarDados($id) {
        return view('usuario.actualizar-dados', ["id"=> $id]);
    }

    public function irEmInicio() {
        return view('pagina_inicial.index');
    }

    public function irEmPerfil($id) {
        return view('usuario.perfil', ["id"=> $id]);
    }

    public function sair() {
        Auth::logout();
        return redirect()->route("usuario.pagina_inicial");
    }

    public function alterarSenha(){
        return view('usuario.alterar-senha');
    }
}
