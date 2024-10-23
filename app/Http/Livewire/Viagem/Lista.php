<?php

namespace App\Http\Livewire\Viagem;

use App\Models\DificuldadeViagem;
use App\Models\User;
use App\Models\Viagem;
use Livewire\Component;

class Lista extends Component
{
    public $viagens = [];

    public function render()
    {
        $this->viagens = Viagem::where("status_viagem", 1)->get();
        return view('livewire.viagem.lista');
    }

    public function buscarUsuario($id)
    {
        return User::find($id);
    }

    public function buscarDificuldade($id)
    {
        return DificuldadeViagem::find($id);
    }

    public function eliminar($id)
    {
        $viagem = Viagem::find($id);
        $viagem->delete();
        $this->emit('alerta', ['mensagem' => 'Viagem cancelada', 'icon' => 'warning', 'tempo' => 4000]);
    }
}
