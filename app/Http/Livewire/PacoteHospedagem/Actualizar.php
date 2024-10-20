<?php

namespace App\Http\Livewire\PacoteHospedagem;

use App\Models\Pacotehospedagem;
use Livewire\Component;

class Actualizar extends Component
{
    public $titulo_pacoteHospedagem;
    public $desc_pacoteHospedagem;
    public $preco_pacoteHospedagem;
    public $max_qtd_pessoas;
    public $status_pacoteHospedagem;
    public $id_pacoteHospedagem;

    protected $rules = [
        'titulo_pacoteHospedagem' => 'required|string|max:50',
        'desc_pacoteHospedagem' => 'required|string|max:200',
        'preco_pacoteHospedagem' => 'required|numeric|min:0.01',
        'max_qtd_pessoas' => 'nullable|integer|min:1',
        'status_pacoteHospedagem' => 'required|boolean',
    ];

    protected $messages = [
        'titulo_pacoteHospedagem.required' => 'O título do pacote de hospedagem é obrigatório.',
        'desc_pacoteHospedagem.required' => 'A descrição do pacote de hospedagem é obrigatória.',
        'preco_pacoteHospedagem.required' => 'O preço do pacote de hospedagem é obrigatório.',
        'status_pacoteHospedagem.required' => 'O status do pacote de hospedagem é obrigatório.',
    ];

    public function mount($id)
    {
        $this->id_pacoteHospedagem = $id;
        $pacoteHospedagem = PacoteHospedagem::find($this->id_pacoteHospedagem);

        if ($pacoteHospedagem) {
            $this->titulo_pacoteHospedagem = $pacoteHospedagem->titulo_pacoteHospedagem;
            $this->desc_pacoteHospedagem = $pacoteHospedagem->desc_pacoteHospedagem;
            $this->preco_pacoteHospedagem = $pacoteHospedagem->preco_pacoteHospedagem;
            $this->max_qtd_pessoas = $pacoteHospedagem->max_qtd_pessoas;
            $this->status_pacoteHospedagem = $pacoteHospedagem->status_pacoteHospedagem;
        }
    }

    public function actualizar()
    {
        $this->validate();

        Pacotehospedagem::where('id', $this->id_pacoteHospedagem)->update([
            'titulo_pacoteHospedagem' => $this->titulo_pacoteHospedagem,
            'desc_pacoteHospedagem' => $this->desc_pacoteHospedagem,
            'preco_pacoteHospedagem' => $this->preco_pacoteHospedagem,
            'max_qtd_pessoas' => $this->max_qtd_pessoas,
            'status_pacoteHospedagem' => $this->status_pacoteHospedagem,
        ]);

        $this->emit('alerta', ['mensagem' => 'Pacote actualizado com sucesso', 'icon' => 'success']);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.pacote-hospedagem.actualizar');
    }
}
