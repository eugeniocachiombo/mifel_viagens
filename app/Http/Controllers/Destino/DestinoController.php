<?php

namespace App\Http\Controllers\Destino;

use App\Http\Controllers\Controller;

class DestinoController extends Controller
{
    public function cadastrar()
    {
        return view("destino.cadastro");
    }

    public function listar()
    {
        return view("destino.lista");
    }

    public function actualizar($id)
    {
        return view("destino.actualizar", ["id" => $id]);
    }
}
