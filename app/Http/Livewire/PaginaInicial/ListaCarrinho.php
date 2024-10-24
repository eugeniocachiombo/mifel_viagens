<?php

namespace App\Http\Livewire\PaginaInicial;

use App\Models\Carrinho;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListaCarrinho extends Component
{
    public $carrinho;

    public function render()
    {
        $this->carrinho = Carrinho::where("id_usuario", Auth::user() ? Auth::user()->id : 0)->get();
        return view('livewire.pagina-inicial.lista-carrinho');
    }
}
