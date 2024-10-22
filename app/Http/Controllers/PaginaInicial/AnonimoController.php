<?php

namespace App\Http\Controllers\PaginaInicial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnonimoController extends Controller
{
    public function irEmInicio() {
        return view('pagina_inicial.anonimo');
    }
}
