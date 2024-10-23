<?php

namespace App\Http\Controllers\Actividade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActividadeController extends Controller
{
    public function cadastrar()
    {
        return view("actividades.cadastro");
    }

    public function listar()
    {
        return view("actividades.lista");
    }

    public function actualizar($id)
    {
        return view("actividades.actualizar", ["id" => $id]);
    }
}
