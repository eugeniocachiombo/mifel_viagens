<?php

namespace App\Http\Livewire\DificuldadeViagem;

use App\Models\DificuldadeViagem;
use Livewire\Component;

class Lista extends Component
{
    public $dificuldadeViagems;

    public function render()
    {
        $this->dificuldadeViagems = DificuldadeViagem::all();
        return view('livewire.dificuldade-viagem.lista'); 
    }

    public function eliminar($id)
    {
        $dificuldadeViagem = DificuldadeViagem::find($id);
        if ($dificuldadeViagem) {
            $dificuldadeViagem->delete();
            $this->emit('alerta', ['mensagem' => 'Dificuldade de Viagem Eliminada', 'icon' => 'success']);
        } else {
            $this->emit('alerta', ['mensagem' => 'Dificuldade de Viagem não encontrada', 'icon' => 'error']);
        }
    }
}
