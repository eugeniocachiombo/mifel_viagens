<?php

namespace App\Http\Livewire\PacoteViagem;

use App\Models\Destino;
use App\Models\PacoteViagem;
use App\Models\Tipoviagem;
use Livewire\Component;

class Cadastro extends Component
{
    public $titulo_pacote;
    public $desc_pacote;
    public $preco_pacote;
    public $id_destino;
    public $id_tipoviagem;
    public $max_qtd_pessoas;
    public $dia_itinerario;
    public $desc_itinerario;
    public $duracao_viagem;

    protected $rules = [
        'titulo_pacote' => 'required|string|max:50',
        'desc_pacote' => 'required|string|max:200',
        'preco_pacote' => 'required|numeric|min:0.01',
        'id_destino' => 'required|exists:destinos,id',
        'id_tipoviagem' => 'required|exists:tipoviagems,id',
        'max_qtd_pessoas' => 'nullable|integer|min:1',
        'dia_itinerario' => 'required|integer',
        'desc_itinerario' => 'required|string|max:200',
        'duracao_viagem' => 'required|integer',
    ];

    protected $messages = [
        'titulo_pacote.required' => 'O título do pacote é obrigatório.',
        'desc_pacote.required' => 'A descrição do pacote é obrigatória.',
        'preco_pacote.required' => 'O preço do pacote é obrigatório.',
        'id_destino.required' => 'O destino é obrigatório.',
        'id_tipoviagem.required' => 'O tipo de viagem é obrigatório.',
        'max_qtd_pessoas.min' => 'A quantidade mínima de pessoas é 1.',
        'duracao_viagem.required' => 'A duração da viagem é obrigatória.',
    ];

    public function render()
    {
        return view('livewire.pacote-viagem.cadastro', [
            'destinos' => Destino::all(),
            'tiposViagem' => Tipoviagem::all(),
        ])->layout("layouts.usuario.app");
    }

    public function cadastrar()
    {
        $this->validate();

        PacoteViagem::create([
            'titulo_pacote' => $this->titulo_pacote,
            'desc_pacote' => $this->desc_pacote,
            'preco_pacote' => $this->preco_pacote,
            'id_destino' => $this->id_destino,
            'id_tipoviagem' => $this->id_tipoviagem,
            'max_qtd_pessoas' => $this->max_qtd_pessoas,
            'dia_itinerario' => $this->dia_itinerario,
            'desc_itinerario' => $this->desc_itinerario,
            'duracao_viagem' => $this->duracao_viagem,
        ]);

        $this->emit('alerta', ['mensagem' => 'Pacote de Viagem cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
