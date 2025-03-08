<?php

namespace App\Http\Livewire\TipoViagem;

use App\Models\Tipoviagem;
use Livewire\Component;

class Lista extends Component
{
    public $tipoviagems;

    public function render()
    {
        $this->tipoviagems = Tipoviagem::all();
        return view('livewire.tipo-viagem.lista')->layout("layouts.usuario.app");
    }

    public function eliminar($id)
    {
        $tipoViagem = TipoViagem::find($id);
        if ($tipoViagem) {
            $tipoViagem->delete();
            $this->emit('alerta', ['mensagem' => 'Tipo de Viagem Eliminado', 'icon' => 'success']);
        } else {
            $this->emit('alerta', ['mensagem' => 'Tipo de Viagem não encontrado', 'icon' => 'error']);
        }
    }
}
