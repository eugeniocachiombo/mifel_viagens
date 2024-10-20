<?php

namespace App\Http\Livewire\PacoteViagem;

use App\Models\Destino;
use App\Models\PacoteViagem;
use App\Models\Tipoviagem;
use Livewire\Component;

class Lista extends Component
{
    public $pacotesViagem;

    public function render()
    {
        $this->pacotesViagem = PacoteViagem::all();
        return view('livewire.pacote-viagem.lista');
    }

    public function eliminar($id)
    {
        $pacoteViagem = PacoteViagem::find($id);
        if ($pacoteViagem) {
            $pacoteViagem->delete();
            $this->emit('alerta', ['mensagem' => 'Pacote de Viagem eliminado com sucesso', 'icon' => 'success']);
        } else {
            $this->emit('alerta', ['mensagem' => 'Pacote de Viagem não encontrado', 'icon' => 'error']);
        }
    }

    public function getDestino($id)
    {
        return Destino::find($id);
    }

    public function getTipoViagem($id)
    {
        return Tipoviagem::find($id);
    }
}
