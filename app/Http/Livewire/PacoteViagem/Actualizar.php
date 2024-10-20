<?php

namespace App\Http\Livewire\PacoteViagem;

use App\Models\Destino;
use App\Models\PacoteViagem;
use App\Models\Tipoviagem;
use Livewire\Component;

class Actualizar extends Component
{
    public $titulo_pacote;
    public $desc_pacote;
    public $preco_pacote;
    public $id_destino;
    public $id_tipoviagem;
    public $status_pacote;
    public $max_qtd_pessoas;
    public $id_pacote_viagem;

    protected $rules = [
        'titulo_pacote' => 'required|string|max:50',
        'desc_pacote' => 'required|string|max:200',
        'preco_pacote' => 'required|numeric|min:0.01',
        'id_destino' => 'required|exists:destinos,id',
        'id_tipoviagem' => 'required|exists:tipoviagems,id',
        'status_pacote' => 'required|boolean',
        'max_qtd_pessoas' => 'nullable|integer|min:1',
    ];

    protected $messages = [
        'titulo_pacote.required' => 'O título do pacote é obrigatório.',
        'desc_pacote.required' => 'A descrição do pacote é obrigatória.',
        'preco_pacote.required' => 'O preço do pacote é obrigatório.',
        'id_destino.required' => 'O destino é obrigatório.',
        'id_tipoviagem.required' => 'O tipo de viagem é obrigatório.',
        'status_pacote.required' => 'O status do pacote é obrigatório.',
    ];

    public function mount($id)
    {
        $this->id_pacote_viagem = $id;
        $pacoteViagem = PacoteViagem::find($this->id_pacote_viagem);
        
        if ($pacoteViagem) {
            $this->titulo_pacote = $pacoteViagem->titulo_pacote;
            $this->desc_pacote = $pacoteViagem->desc_pacote;
            $this->preco_pacote = $pacoteViagem->preco_pacote;
            $this->id_destino = $pacoteViagem->id_destino;
            $this->id_tipoviagem = $pacoteViagem->id_tipoviagem;
            $this->status_pacote = $pacoteViagem->status_pacote;
            $this->max_qtd_pessoas = $pacoteViagem->max_qtd_pessoas;
        }
    }

    public function render()
    {
        return view('livewire.pacote-viagem.actualizar', [
            'destinos' => Destino::all(),
            'tiposViagem' => Tipoviagem::all(),
        ]);
    }

    public function actualizar()
    {
        $this->validate();

        PacoteViagem::where('id', $this->id_pacote_viagem)->update([
            'titulo_pacote' => $this->titulo_pacote,
            'desc_pacote' => $this->desc_pacote,
            'preco_pacote' => $this->preco_pacote,
            'id_destino' => $this->id_destino,
            'id_tipoviagem' => $this->id_tipoviagem,
            'status_pacote' => $this->status_pacote,
            'max_qtd_pessoas' => $this->max_qtd_pessoas,
        ]);

        $this->emit('alerta', ['mensagem' => 'Pacote de Viagem actualizado com sucesso', 'icon' => 'success']);
        return redirect()->route('pacote.viagem.lista'); 
    }
}
