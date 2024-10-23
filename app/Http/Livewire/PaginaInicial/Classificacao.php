<?php

namespace App\Http\Livewire\PaginaInicial;

use App\Models\Cliente;
use App\Models\Destino;
use App\Models\Reservas;
use App\Models\Viagem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Classificacao extends Component
{
    public $destinos, $clientes, $viagens, $reservas;

    public function render()
    {
        $this->destinos = Destino::all();
        $this->clientes = Cliente::all();
        $this->viagens = Viagem::all();

        if(Auth::user() && Auth::user()->id_acesso == 2){
            $this->reservas = Reservas::where("status_reservas", 1)
            ->where("id_usuario", Auth::user()->id)
            ->get();
        }else{
            $this->reservas = Reservas::all();
       }
        return view('livewire.pagina-inicial.classificacao');
    }
}
