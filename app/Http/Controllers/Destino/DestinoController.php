<?php

namespace App\Http\Controllers\Destino;

use App\Http\Controllers\Controller;

class DestinoController extends Controller
{
    public function cadastrar()
    {
        return view("destino.cadastro");
    }
}
