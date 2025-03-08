<?php

namespace App\Http\Livewire\Actividades;

use App\Models\Actividade;
use Livewire\Component;
use Livewire\WithFileUploads;

class Cadastro extends Component
{
    use WithFileUploads;

    public $nome_actividade;
    public $desc_actividade;
    public $img_actividade;
    public $status_actividade;

    protected $rules = [
        'nome_actividade' => 'required|string|max:255',
        'desc_actividade' => 'nullable|string|max:500',
        'img_actividade' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        'status_actividade' => 'required|boolean',
    ];

    protected $messages = [
        'nome_actividade.required' => 'O nome da actividade é obrigatório.',
        'desc_actividade.max' => 'A descrição não pode exceder 500 caracteres.',
        'img_actividade.required' => 'A imagem da actividade é obrigatória.',
        'img_actividade.image' => 'O arquivo deve ser uma imagem.',
        'img_actividade.mimes' => 'A imagem deve ser nos formatos: jpg, jpeg, png, gif.',
        'img_actividade.max' => 'A imagem não pode exceder 2MB.',
        'status_actividade.required' => 'O status da actividade é obrigatório.',
    ];

    public function render()
    {
        return view('livewire.actividades.cadastro')->layout("layouts.usuario.app");
    }

    public function cadastrar()
    {
        $this->validate();
        $imagePath = $this->img_actividade->store('actividades', 'public');
        
        Actividade::create([
            'nome_actividade' => $this->nome_actividade,
            'desc_actividade' => $this->desc_actividade ?? 'nenhuma',
            'img_actividade' => $imagePath,
            'status_actividade' => $this->status_actividade,
        ]);
        $this->emit('alerta', ['mensagem' => 'Cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }

    
}
