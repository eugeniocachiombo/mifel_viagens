<?php

namespace App\Http\Livewire\Destino;

use App\Models\Destino;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actualizar extends Component
{
    use WithFileUploads;

    
    public $nome_destino;
    public $desc_destino;
    public $img_destino;
    public $status_destino;
    public $id_destino;

    protected $rules = [
        'nome_destino' => 'required|string|max:255',
        'desc_destino' => 'required|string|max:500',
        'img_destino' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        'status_destino' => 'required|boolean',
    ];

    protected $messages = [
        'nome_destino.required' => 'O nome do destino é obrigatório.',
        'desc_destino.required' => 'A descrição do destino é obrigatória.',
        'img_destino.required' => 'A imagem do destino é obrigatória.',
        'img_destino.image' => 'O arquivo deve ser uma imagem.',
        'img_destino.mimes' => 'A imagem deve ser nos formatos: jpg, jpeg, png, gif.',
        'img_destino.max' => 'A imagem não pode exceder 2MB.',
        'status_destino.required' => 'O status do destino é obrigatório.',
    ];

    public function mount($id)
    {
        $this->id_destino = $id;
        $destino = Destino::where("id", $this->id_destino)->first();
        $this->nome_destino = $destino->nome_destino;
        $this->desc_destino = $destino->desc_destino;
        $this->status_destino = $destino->status_destino;
    }

    public function render()
    {
        return view('livewire.destino.actualizar');
    }

    public function cadastrar()
    {
        $this->validate();
        $imagePath = $this->img_destino->store('destinos', 'public');

        Destino::where("id", $this->id_destino)->update([
            'nome_destino' => $this->nome_destino,
            'desc_destino' => $this->desc_destino,
            'img_destino' => $imagePath,
            'status_destino' => $this->status_destino,
        ]);
        $this->emit('alerta', ['mensagem' => 'Actualizado com sucesso', 'icon' => 'success']);
        $this->reset();
    }

}
