<?php

namespace App\Http\Livewire\CatPreco;

use App\Models\CatPreco;
use Livewire\Component;
use Livewire\WithFileUploads;

class Cadastro extends Component
{
    use WithFileUploads;

    public $nome_catPreco;
    public $desc_catPreco;
    public $faixa_idade;
    public $preco_catPreco;
    public $status_catPreco;

    protected $rules = [
        'nome_catPreco' => 'required|string|max:50',
        'desc_catPreco' => 'required|string|max:500',
        'faixa_idade' => 'required|string|max:255',
        'preco_catPreco' => 'required',
        'status_catPreco' => 'required|boolean',
    ];

    protected $messages = [
        'nome_catPreco.required' => 'O nome da categoria é obrigatório.',
        'nome_catPreco.string' => 'O nome da categoria deve ser um texto.',
        'nome_catPreco.max' => 'O nome da categoria deve ter no máximo 50 caracteres.',
        
        'desc_catPreco.required' => 'A descrição da categoria é obrigatória.',
        'desc_catPreco.string' => 'A descrição deve ser um texto.',
        'desc_catPreco.max' => 'A descrição deve ter no máximo 500 caracteres.',
        
        'faixa_idade.required' => 'A faixa de idade é obrigatória.',
        'faixa_idade.string' => 'A faixa de idade deve ser um texto.',
        'faixa_idade.max' => 'A faixa de idade deve ter no máximo 255 caracteres.',
        
        'preco_catPreco.required' => 'O preço  é obrigatório.',
        
        'status_catPreco.required' => 'O status da categoria é obrigatório.',
        'status_catPreco.boolean' => 'O status deve ser verdadeiro ou falso.',
    ];

    public function cadastrar()
    {
        $this->validate();
        $preco1 = str_replace(".", "", $this->preco_catPreco);
        $preco2 = str_replace(",", ".", $preco1);
        
        CatPreco::create([
            'nome_catPreco' => $this->nome_catPreco,
            'desc_catPreco' => $this->desc_catPreco,
            'faixa_idade' => $this->faixa_idade,
            'preco_catPreco' => $preco2,
            'status_catPreco' => $this->status_catPreco,
        ]);

        $this->emit('alerta', ['mensagem' => 'Cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.cat-preco.cadastro');
    }
}

