<?php

namespace App\Http\Controllers\Carrinho;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function confirmar()
    {
        return view("carrinho.confirmar");
    }
}
