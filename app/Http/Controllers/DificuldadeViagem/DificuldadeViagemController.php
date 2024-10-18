<?php

namespace App\Http\Controllers\DificuldadeViagem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DificuldadeViagemController extends Controller
{
    public function cadastrar()
    {
        return view("dificuldade-viagem.cadastro");
    }

    public function listar()
    {
        return view("dificuldade-viagem.lista");
    }

    public function actualizar($id)
    {
        return view("dificuldade-viagem.actualizar", ["id" => $id]);
    }
}
