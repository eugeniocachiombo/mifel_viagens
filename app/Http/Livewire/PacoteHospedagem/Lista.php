<?php

namespace App\Http\Livewire\PacoteHospedagem;

use App\Models\Pacotehospedagem;
use Livewire\Component;

class Lista extends Component
{
    public $pacoteHospedagems;


    public function eliminar($id)
    {
        $pacoteHospedagem = Pacotehospedagem::find($id);
        if ($pacoteHospedagem) {
            $pacoteHospedagem->delete();
            $this->emit('alerta', ['mensagem' => 'Pacote de Hospedagem Eliminado', 'icon' => 'success']);
        } else {
            $this->emit('alerta', ['mensagem' => 'Pacote de Hospedagem não encontrado', 'icon' => 'error']);
        }
    }

    public function render()
    {
        $this->pacoteHospedagems = PacoteHospedagem::all();
        return view('livewire.pacote-hospedagem.lista');
    }
}
