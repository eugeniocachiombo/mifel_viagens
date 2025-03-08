<?php

namespace App\Http\Livewire\CatPreco;

use App\Models\CatPreco;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actualizar extends Component
{
    use WithFileUploads;

    public $nome_catPreco;
    public $desc_catPreco;
    public $faixa_idade;
    public $preco_catPreco;
    public $status_catPreco;
    public $id_catPreco;

    protected $rules = [
        'nome_catPreco' => 'required|string|max:50',
        'desc_catPreco' => 'required|string|max:500',
        'faixa_idade' => 'required|string|max:255',
        'preco_catPreco' => 'required',
        'status_catPreco' => 'required|boolean',
    ];

    protected $messages = [
        'nome_catPreco.required' => 'O nome da categoria é obrigatório.',
        'desc_catPreco.required' => 'A descrição da categoria é obrigatória.',
        'faixa_idade.required' => 'A faixa de idade é obrigatória.',
        'preco_catPreco.required' => 'O preço é obrigatório.',
        
        'status_catPreco.required' => 'O status da categoria é obrigatório.',
        'status_catPreco.boolean' => 'O status deve ser verdadeiro ou falso.',
    ];

    public function mount($id)
    {
        $this->id_catPreco = $id;
        $catPreco = CatPreco::find($this->id_catPreco);
        if ($catPreco) {
            $this->nome_catPreco = $catPreco->nome_catPreco;
            $this->desc_catPreco = $catPreco->desc_catPreco;
            $this->faixa_idade = $catPreco->faixa_idade;
            $this->preco_catPreco = number_format($catPreco->preco_catPreco, 2, ',', '.');
            $this->status_catPreco = $catPreco->status_catPreco;
        }
    }

    public function render()
    {
        return view('livewire.cat-preco.actualizar')->layout("layouts.usuario.app");
    }

    public function actualizar()
    {
        $this->validate();

        // Formatar o preço para o formato adequado
        $precoFormatado = str_replace(".", "", $this->preco_catPreco);
        $precoFinal = str_replace(",", ".", $precoFormatado);
        
        CatPreco::where("id", $this->id_catPreco)->update([
            'nome_catPreco' => $this->nome_catPreco,
            'desc_catPreco' => $this->desc_catPreco,
            'faixa_idade' => $this->faixa_idade,
            'preco_catPreco' => $precoFinal,
            'status_catPreco' => $this->status_catPreco,
        ]);

        $this->emit('alerta', ['mensagem' => 'Actualizado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
