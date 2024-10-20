<?php

namespace App\Http\Livewire\PacoteRefeicao;

use App\Models\Pacoterefeicao;
use Livewire\Component;

class Cadastro extends Component
{
    public $titulo_pacoteRefeicao;
    public $desc_pacoteRefeicao;
    public $preco_pacoteRefeicao;
    public $status_pacoteRefeicao = 1; 

    protected $rules = [
        'titulo_pacoteRefeicao' => 'required|string|max:50',
        'desc_pacoteRefeicao' => 'required|string|max:200',
        'preco_pacoteRefeicao' => 'nullable|numeric|min:0.01'
    ];

    protected $messages = [
        'titulo_pacoteRefeicao.required' => 'O título do pacote de refeição é obrigatório.',
        'desc_pacoteRefeicao.required' => 'A descrição do pacote de refeição é obrigatória.',
        'preco_pacoteRefeicao.numeric' => 'O preço deve ser um número válido.'
    ];

    public function cadastrar()
    {
        $this->validate();

        Pacoterefeicao::create([
            'titulo_pacoteRefeicao' => $this->titulo_pacoteRefeicao,
            'desc_pacoteRefeicao' => $this->desc_pacoteRefeicao,
            'preco_pacoteRefeicao' => $this->preco_pacoteRefeicao
        ]);

        $this->emit('alerta', ['mensagem' => 'Pacote de Refeição cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.pacote-refeicao.cadastro');
    }
}
