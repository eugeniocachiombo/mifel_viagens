<?php

namespace App\Http\Controllers\PacoteRefeicao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacoteRefeicaocontroller extends Controller
{
    public function cadastrar()
    {
        return view("pacote-refeicao.cadastro");
    }

    public function listar()
    {
        return view("pacote-refeicao.lista");
    }

    public function actualizar($id)
    {
        return view("pacote-refeicao.actualizar", ["id" => $id]);
    }
}
