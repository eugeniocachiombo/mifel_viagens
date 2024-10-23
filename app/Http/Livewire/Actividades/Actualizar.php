<?php

namespace App\Http\Livewire\Actividades;

use App\Models\Actividade;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actualizar extends Component
{
    use WithFileUploads;

    public $nome_actividade;
    public $desc_actividade;
    public $img_actividade;
    public $status_actividade;
    public $id_actividade;

    protected $rules = [
        'nome_actividade' => 'required|string|max:255',
        'desc_actividade' => 'required|string|max:500',
        'img_actividade' => 'image|mimes:jpg,jpeg,png,gif|max:2048', // Tornando a imagem opcional
        'status_actividade' => 'required|boolean',
    ];

    protected $messages = [
        'nome_actividade.required' => 'O nome da atividade é obrigatório.',
        'desc_actividade.required' => 'A descrição da atividade é obrigatória.',
        'img_actividade.image' => 'O arquivo deve ser uma imagem.',
        'img_actividade.mimes' => 'A imagem deve ser nos formatos: jpg, jpeg, png, gif.',
        'img_actividade.max' => 'A imagem não pode exceder 2MB.',
        'status_actividade.required' => 'O status da atividade é obrigatório.',
    ];

    public function mount($id)
    {
        $this->id_actividade = $id;
        $actividade = Actividade::find($this->id_actividade);
        $this->nome_actividade = $actividade->nome_actividade;
        $this->desc_actividade = $actividade->desc_actividade;
        $this->status_actividade = $actividade->status_actividade;
    }

    public function render()
    {
        return view('livewire.actividades.actualizar');
    }

    public function atualizar()
    {
        $this->validate();

        $data = [
            'nome_actividade' => $this->nome_actividade,
            'desc_actividade' => $this->desc_actividade,
            'status_actividade' => $this->status_actividade,
        ];

        if ($this->img_actividade) {
            $imagePath = $this->img_actividade->store('actividades', 'public');
            $data['img_actividade'] = $imagePath;
        }

        Actividade::where('id', $this->id_actividade)->update($data);
        $this->emit('alerta', ['mensagem' => 'Atualizado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
