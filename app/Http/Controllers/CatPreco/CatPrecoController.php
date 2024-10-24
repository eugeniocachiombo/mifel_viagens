<?php

namespace App\Http\Controllers\CatPreco;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatPrecoController extends Controller
{
    public function cadastrar()
    {
        return view("cat-preco.cadastro");
    }

    public function listar()
    {
        return view("cat-preco.lista");
    }

    public function actualizar($id)
    {
        return view("cat-preco.actualizar", ["id" => $id]);
    }
}
