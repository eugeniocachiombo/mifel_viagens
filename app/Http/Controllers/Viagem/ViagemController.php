<?php

namespace App\Http\Controllers\Viagem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function cadastrar()
    {
        return view("viagem.cadastro");
    }

    public function listar()
    {
        return view("viagem.lista");
    }

    public function actualizar($id)
    {
        return view("viagem.actualizar", ["id" => $id]);
    }
}
