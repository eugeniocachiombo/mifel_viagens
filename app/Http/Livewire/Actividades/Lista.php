<?php

namespace App\Http\Livewire\Actividades;

use App\Models\Actividade;
use Livewire\Component;

class Lista extends Component
{
    public $actividades;

    public function render()
    {
        $this->actividades = Actividade::all();
        return view('livewire.actividades.lista')->layout("layouts.usuario.app");
    }

    public function eliminar($id)
    {
        $actividade = Actividade::find($id);
        if ($actividade) {
            $actividade->delete();
            $this->emit('alerta', ['mensagem' => 'Atividade Eliminada', 'icon' => 'success']);
        } else {
            $this->emit('alerta', ['mensagem' => 'Atividade não encontrada', 'icon' => 'error']);
        }
    }
}
