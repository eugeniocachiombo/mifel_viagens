<?php

namespace App\Http\Livewire\PacoteRefeicao;

use App\Models\Pacoterefeicao;
use Livewire\Component;

class Lista extends Component
{

    public $pacoteRefeicaos;

    public function eliminar($id)
    {
        $pacoteRefeicao = Pacoterefeicao::find($id);
        if ($pacoteRefeicao) {
            $pacoteRefeicao->delete();
            $this->emit('alerta', ['mensagem' => 'Pacote de Refeição Eliminado', 'icon' => 'success']);
        } else {
            $this->emit('alerta', ['mensagem' => 'Pacote de Refeição não encontrado', 'icon' => 'error']);
        }
    }

    public function render()
    {
        $this->pacoteRefeicaos = PacoteRefeicao::all();
        return view('livewire.pacote-refeicao.lista');
    }
}
