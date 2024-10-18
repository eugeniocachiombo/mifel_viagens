<?php

namespace App\Http\Livewire\PaginaInicial;

use App\Models\Cliente;
use App\Models\Destino;
use App\Models\Reservas;
use App\Models\Viagem;
use Livewire\Component;

class Classificacao extends Component
{
    public $destinos, $clientes, $viagens, $reservas;

    public function render()
    {
        $this->destinos = Destino::all();
         $this->clientes = Cliente::all();
         $this->viagens = Viagem::all();
         $this->reservas = Reservas::all();
        return view('livewire.pagina-inicial.classificacao');
    }
}
