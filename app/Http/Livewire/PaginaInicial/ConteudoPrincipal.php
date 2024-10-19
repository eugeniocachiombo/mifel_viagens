<?php

namespace App\Http\Livewire\PaginaInicial;

use App\Models\Destino;
use Livewire\Component;

class ConteudoPrincipal extends Component
{
    public $destinos;

    public function render()
    {
        $this->destinos = Destino::all();
        return view('livewire.pagina-inicial.conteudo-principal');
    }
}
