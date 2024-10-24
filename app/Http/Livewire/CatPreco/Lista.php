<?php

namespace App\Http\Livewire\CatPreco;

use App\Models\CatPreco;
use Livewire\Component;

class Lista extends Component
{
    public $catprecos;

    public function render()
    {
        $this->catprecos = CatPreco::all();
        return view('livewire.cat-preco.lista');
    }

    public function eliminar($id)
    {
        $catPreco = CatPreco::find($id);
        $catPreco->delete();
        $this->emit('alerta', ['mensagem' => 'Categoria de Preço Eliminada', 'icon' => 'success']);
    }
}

