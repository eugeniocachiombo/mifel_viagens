<?php

namespace App\Http\Livewire\Carrinho;

use App\Models\Carrinho;
use App\Models\PacoteViagem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Confirmar extends Component
{
    public $carrinhos;

    public function render()
    {
        $this->carrinhos = Carrinho::where("id_usuario", Auth::user()->id)->get();
        return view('livewire.carrinho.confirmar');
    }

    public function buscarPacoteViagem($id){
        return PacoteViagem::find($id);
    }
}
