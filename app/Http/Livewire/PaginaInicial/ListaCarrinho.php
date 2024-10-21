<?php

namespace App\Http\Livewire\PaginaInicial;

use App\Models\Carrinho;
use Livewire\Component;

class ListaCarrinho extends Component
{
    public $carrinho, $listeners = ["carrinhoEmTempoReal"];

    public function render()
    {
        $this->carrinho = Carrinho::all();
        return view('livewire.pagina-inicial.lista-carrinho');
    }

    public function carrinhoEmTempoReal(){}
}
