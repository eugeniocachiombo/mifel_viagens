<?php

namespace App\Http\Livewire\Carrinho;

use App\Models\Carrinho;
use App\Models\Destino;
use App\Models\Pacotehospedagem;
use App\Models\PacoteViagem;
use App\Models\Tipoviagem;
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

    public function buscarDestino($id){
        return Destino::find($id);
    }
    public function buscarTipoViagem($id){
        return Tipoviagem::find($id);
    }

    public function buscarPacoteHospedagem($id){
        return Pacotehospedagem::find($id);
    }
}
