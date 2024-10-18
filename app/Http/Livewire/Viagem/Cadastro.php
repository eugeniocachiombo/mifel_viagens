<?php

namespace App\Http\Livewire\Viagem;

use App\Models\DificuldadeViagem;
use App\Models\Viagem;
use Livewire\Component;

class Cadastro extends Component
{
    public $dificuldades;
    public $titulo_viagens;
    public $desc_viagens;
    public $cod_dificuldade;
    public $EmDestaque_viagens;
    public $duracao_viagens;
    public $vagas_viagens;
    public $preco_viagens;
    public $status_viagens;

    protected $rules = [
        'titulo_viagens' => 'required|string|max:255',
        'desc_viagens' => 'required|string|max:1500',
        'cod_dificuldade' => 'required|exists:dificuldade_viagems,id',
        'EmDestaque_viagens' => 'boolean',
        'duracao_viagens' => 'required|integer|min:1',
        'vagas_viagens' => 'nullable|integer|min:1',
        'preco_viagens' => 'nullable|numeric',
        'status_viagens' => 'required|boolean',
    ];

    public function mount()
    {
        $this->dificuldades = DificuldadeViagem::all();
    }

    public function render()
    {
        return view('livewire.viagem.cadastro');
    }

    public function cadastrar()
    {
        $this->validate();
        
        Viagem::create([
            'titulo_viagens' => $this->titulo_viagens,
            'desc_viagens' => $this->desc_viagens,
            'cod_dificuldade' => $this->cod_dificuldade,
            'EmDestaque_viagens' => $this->EmDestaque_viagens,
            'duracao_viagens' => $this->duracao_viagens,
            'vagas_viagens' => $this->vagas_viagens,
            'preco_viagens' => $this->preco_viagens,
            'status_viagens' => $this->status_viagens,
        ]);

        $this->emit('alerta', ['mensagem' => 'Cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
