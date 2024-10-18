<?php

namespace App\Http\Livewire\Destino;

use App\Models\Destino;
use Livewire\Component;
use Livewire\WithFileUploads;

class Cadastro extends Component
{
    use WithFileUploads;

    public $nome_destino;
    public $desc_destino;
    public $img_destino;
    public $status_destino;

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

    public function cadastrar()
    {
        $this->validate();
        $imagePath = $this->img_destino->store('destinos', 'public');
        
        Destino::create([
            'nome_destino' => $this->nome_destino,
            'desc_destino' => $this->desc_destino,
            'img_destino' => $imagePath,
            'status_destino' => $this->status_destino,
        ]);
        $this->emit('alerta', ['mensagem' => 'Cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.destino.cadastro');
    }
}
