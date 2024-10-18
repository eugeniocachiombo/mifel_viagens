<?php

namespace App\Http\Controllers\TipoViagem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoViagemController extends Controller
{
    public function cadastrar()
    {
        return view("tipo-viagem.cadastro");
    }

    public function listar()
    {
        return view("tipo-viagem.lista");
    }

    public function actualizar($id)
    {
        return view("tipo-viagem.actualizar", ["id" => $id]);
    }
}
