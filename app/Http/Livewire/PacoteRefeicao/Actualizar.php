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
        'preco_pacoteRefeicao' => 'nullable|numeric|min:0.01',
        'status_pacoteRefeicao' => 'required|boolean',
    ];

    protected $messages = [
        'titulo_pacoteRefeicao.required' => 'O título do pacote de refeição é obrigatório.',
        'desc_pacoteRefeicao.required' => 'A descrição do pacote de refeição é obrigatória.',
        'preco_pacoteRefeicao.min' => 'O preço deve ser pelo menos R$ 0,01.',
        'status_pacoteRefeicao.required' => 'O status do pacote de refeição é obrigatório.',
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

    public function render()
    {
        return view('livewire.pacote-refeicao.actualizar');
    }
}
