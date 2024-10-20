<?php

namespace App\Http\Livewire\PacoteHospedagem;

use App\Models\Pacotehospedagem;
use Livewire\Component;

class Cadastro extends Component
{
    public $titulo_pacoteHospedagem;
    public $desc_pacoteHospedagem;
    public $preco_pacoteHospedagem;
    public $max_qtd_pessoas;
    public $status_pacoteHospedagem;

    protected $rules = [
        'titulo_pacoteHospedagem' => 'required|string|max:50',
        'desc_pacoteHospedagem' => 'required|string|max:200',
        'preco_pacoteHospedagem' => 'required|numeric|min:0.01',
        'max_qtd_pessoas' => 'nullable|integer|min:1',
    ];

    protected $messages = [
        'titulo_pacoteHospedagem.required' => 'O título do pacote de hospedagem é obrigatório.',
        'titulo_pacoteHospedagem.string' => 'O título do pacote de hospedagem deve ser uma string.',
        'titulo_pacoteHospedagem.max' => 'O título do pacote de hospedagem deve ter no máximo 50 caracteres.',
    
        'desc_pacoteHospedagem.required' => 'A descrição do pacote de hospedagem é obrigatória.',
        'desc_pacoteHospedagem.string' => 'A descrição do pacote de hospedagem deve ser uma string.',
        'desc_pacoteHospedagem.max' => 'A descrição do pacote de hospedagem deve ter no máximo 200 caracteres.',
    
        'preco_pacoteHospedagem.required' => 'O preço do pacote de hospedagem é obrigatório.',
        'preco_pacoteHospedagem.numeric' => 'O preço do pacote de hospedagem deve ser um número.',
        'preco_pacoteHospedagem.min' => 'O preço do pacote de hospedagem deve ser pelo menos 0,01.',
    
        'max_qtd_pessoas.integer' => 'A máxima quantidade de pessoas deve ser um número inteiro.',
        'max_qtd_pessoas.min' => 'A máxima quantidade de pessoas deve ser pelo menos 1.',
    ];
    

    public function cadastrar()
    {
        $this->validate();

        Pacotehospedagem::create([
            'titulo_pacoteHospedagem' => $this->titulo_pacoteHospedagem,
            'desc_pacoteHospedagem' => $this->desc_pacoteHospedagem,
            'preco_pacoteHospedagem' => $this->preco_pacoteHospedagem,
            'max_qtd_pessoas' => $this->max_qtd_pessoas
        ]);

        $this->emit('alerta', ['mensagem' => 'Pacote cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.pacote-hospedagem.cadastro');
    }
}
