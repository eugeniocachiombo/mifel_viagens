<?php

namespace App\Http\Livewire\PacoteRefeicao;

use App\Models\Pacoterefeicao;
use Livewire\Component;

class Actualizar extends Component
{

    public $titulo_pacoteRefeicao;
    public $desc_pacoteRefeicao;
    public $preco_pacoteRefeicao;
    public $status_pacoteRefeicao;
    public $id_pacoteRefeicao;

    protected $rules = [
        'titulo_pacoteRefeicao' => 'required|string|max:50',
        'desc_pacoteRefeicao' => 'required|string|max:200',
        'preco_pacoteRefeicao' => 'required',
        'status_pacoteRefeicao' => 'required|boolean',
    ];

    protected $messages = [
        'titulo_pacoteRefeicao.required' => 'O título do pacote de refeição é obrigatório.',
        'titulo_pacoteRefeicao.string' => 'O título do pacote de refeição deve ser uma string.',
        'titulo_pacoteRefeicao.max' => 'O título do pacote de refeição deve ter no máximo 50 caracteres.',
    
        'desc_pacoteRefeicao.required' => 'A descrição do pacote de refeição é obrigatória.',
        'desc_pacoteRefeicao.string' => 'A descrição do pacote de refeição deve ser uma string.',
        'desc_pacoteRefeicao.max' => 'A descrição do pacote de refeição deve ter no máximo 200 caracteres.',
    
        'preco_pacoteRefeicao.required' => 'O preço do pacote de refeição é obrigatório.',
        
        'max_qtd_pessoas.required' => 'A máxima quantidade de pessoas é obrigatório.',
        'max_qtd_pessoas.integer' => 'A máxima quantidade de pessoas deve ser um número inteiro.',
        'max_qtd_pessoas.min' => 'A máxima quantidade de pessoas deve ser pelo menos 1.',
    ];

    public function mount($id)
    {
        $this->id_pacoteRefeicao = $id;
        $pacoteRefeicao = PacoteRefeicao::find($this->id_pacoteRefeicao);
        $this->titulo_pacoteRefeicao = $pacoteRefeicao->titulo_pacoteRefeicao;
        $this->desc_pacoteRefeicao = $pacoteRefeicao->desc_pacoteRefeicao;
        $this->preco_pacoteRefeicao = $pacoteRefeicao->preco_pacoteRefeicao;
        $this->status_pacoteRefeicao = $pacoteRefeicao->status_pacoteRefeicao;
    }

    public function render()
    {
        return view('livewire.pacote-refeicao.actualizar')->layout("layouts.usuario.app");
    }

    public function actualizar()
    {
        $this->validate();
        $preco1 = str_replace(".", "", $this->preco_pacoteRefeicao);
        $preco2 = str_replace(",", ".", $preco1);

        Pacoterefeicao::where('id', $this->id_pacoteRefeicao)->update([
            'titulo_pacoteRefeicao' => $this->titulo_pacoteRefeicao,
            'desc_pacoteRefeicao' => $this->desc_pacoteRefeicao,
            'preco_pacoteRefeicao' => $preco2,
            'status_pacoteRefeicao' => $this->status_pacoteRefeicao,
        ]);

        $this->emit('alerta', ['mensagem' => 'Pacote de Refeição Actualizado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
