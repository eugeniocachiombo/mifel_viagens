<?php

namespace App\Http\Controllers\PacoteViagem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacoteViagemController extends Controller
{
    public function cadastrar()
    {
        return view("pacote-viagem.cadastro");
    }

    public function listar()
    {
        return view("pacote-viagem.lista");
    }

    public function actualizar($id)
    {
        return view("pacote-viagem.actualizar", ["id" => $id]);
    }
}
