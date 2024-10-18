<?php

namespace App\Http\Livewire\TipoViagem;

use App\Models\Tipoviagem;
use Livewire\Component;

class Actualizar extends Component
{

    public $nome_tipoViagem;
    public $desc_tipoViagem;
    public $status_tipoViagem;
    public $id_tipoViagem;

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

    public function mount($id)
    {
        $this->id_tipoViagem = $id;
        $tipoViagem = Tipoviagem::find($this->id_tipoViagem);
        $this->nome_tipoViagem = $tipoViagem->nome_tipoViagem;
        $this->desc_tipoViagem = $tipoViagem->desc_tipoViagem;
        $this->status_tipoViagem = $tipoViagem->status_tipoViagem;
    }

    public function render()
    {
        return view('livewire.tipo-viagem.actualizar');
    }

    public function atualizar()
    {
        $this->validate();

        TipoViagem::where("id", $this->id_tipoViagem)->update([
            'nome_tipoViagem' => $this->nome_tipoViagem,
            'desc_tipoViagem' => $this->desc_tipoViagem,
            'status_tipoViagem' => $this->status_tipoViagem,
        ]);

        $this->emit('alerta', ['mensagem' => 'Atualizado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
