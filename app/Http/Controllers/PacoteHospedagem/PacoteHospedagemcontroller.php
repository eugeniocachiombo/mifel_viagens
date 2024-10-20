<?php

namespace App\Http\Controllers\PacoteHospedagem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacoteHospedagemcontroller extends Controller
{
    public function cadastrar()
    {
        return view("pacote-hospedagem.cadastro");
    }

    public function listar()
    {
        return view("pacote-hospedagem.lista");
    }

    public function actualizar($id)
    {
        return view("pacote-hospedagem.actualizar", ["id" => $id]);
    }
}
