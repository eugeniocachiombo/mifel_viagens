<?php

namespace App\Http\Livewire\DificuldadeViagem;

use App\Models\DificuldadeViagem;
use Livewire\Component;

class Actualizar extends Component
{
    public $nome_dificuldadeViagem;
    public $desc_dificuldadeViagem;
    public $status_dificuldadeViagem;
    public $id_dificuldadeViagem;

    protected $rules = [
        'nome_dificuldadeViagem' => 'required|string|max:150',
        'desc_dificuldadeViagem' => 'required|string|max:150',
        'status_dificuldadeViagem' => 'required|boolean',
    ];

    protected $messages = [
        'nome_dificuldadeViagem.required' => 'O nome da dificuldade de viagem é obrigatório.',
        'desc_dificuldadeViagem.required' => 'A descrição da dificuldade de viagem é obrigatória.',
        'status_dificuldadeViagem.required' => 'O status da dificuldade de viagem é obrigatório.',
    ];

    public function mount($id)
    {
        $this->id_dificuldadeViagem = $id;
        $dificuldadeViagem = DificuldadeViagem::find($this->id_dificuldadeViagem);
        $this->nome_dificuldadeViagem = $dificuldadeViagem->nome_dificuldadeViagem;
        $this->desc_dificuldadeViagem = $dificuldadeViagem->desc_dificuldadeViagem;
        $this->status_dificuldadeViagem = $dificuldadeViagem->status_dificuldadeViagem;
    }

    public function render()
    {
        return view('livewire.dificuldade-viagem.actualizar');
    }

    public function actualizar()
    {
        $this->validate();

        DificuldadeViagem::where('id', $this->id_dificuldadeViagem)->update([
            'nome_dificuldadeViagem' => $this->nome_dificuldadeViagem,
            'desc_dificuldadeViagem' => $this->desc_dificuldadeViagem,
            'status_dificuldadeViagem' => $this->status_dificuldadeViagem,
        ]);

        $this->emit('alerta', ['mensagem' => 'Actualizado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
