<?php

namespace App\Http\Livewire\PaginaInicial;

use App\Models\Carrinho;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListaCarrinho extends Component
{
    public $carrinho, $listeners = ["carrinhoEmTempoReal"];

    public function render()
    {
        $this->carrinho = Carrinho::where("id_usuario", Auth::user() ? Auth::user()->id : 0)->get();
        return view('livewire.pagina-inicial.lista-carrinho');
    }

    public function carrinhoEmTempoReal(){}
}
