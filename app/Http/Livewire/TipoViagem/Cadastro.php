<?php

namespace App\Http\Livewire\TipoViagem;

use App\Models\Tipoviagem;
use Livewire\Component;
use Livewire\WithFileUploads;

class Cadastro extends Component
{
    use WithFileUploads;

    public $nome_tipoViagem;
    public $desc_tipoViagem;
    public $status_tipoViagem;

    protected $rules = [
        'nome_tipoViagem' => 'required|string|max:150',
        'desc_tipoViagem' => 'required|string|max:150',
        'status_tipoViagem' => 'required|boolean',
    ];

    protected $messages = [
        'nome_tipoViagem.required' => 'O nome do tipo de viagem é obrigatório.',
        'desc_tipoViagem.required' => 'A descrição do tipo de viagem é obrigatória.',
        'status_tipoViagem.required' => 'O status do tipo de viagem é obrigatório.',
    ];

    public function cadastrar()
    {
        $this->validate();

        Tipoviagem::create([
            'nome_tipoViagem' => $this->nome_tipoViagem,
            'desc_tipoViagem' => $this->desc_tipoViagem,
            'status_tipoViagem' => $this->status_tipoViagem,
        ]);

        $this->emit('alerta', ['mensagem' => 'Cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.tipo-viagem.cadastro');
    }
}
