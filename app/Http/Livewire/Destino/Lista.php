<?php

namespace App\Http\Livewire\Destino;

use App\Models\Destino;
use Livewire\Component;

class Lista extends Component
{
    public $destinos;
    
    public function render()
    {
        $this->destinos = Destino::all();
        return view('livewire.destino.lista')->layout("layouts.usuario.app");
    }

    public function eliminar($id){
        $destino = Destino::find($id);
        $destino->delete();
        $this->emit('alerta', ['mensagem' => 'Destino Eliminado', 'icon' => 'success']);
    }
}
