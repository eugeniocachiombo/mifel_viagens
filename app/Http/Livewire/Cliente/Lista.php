<?php

namespace App\Http\Livewire\Cliente;

use App\Models\Cliente;
use App\Models\User;
use Livewire\Component;

class Lista extends Component
{
    public $clientes;

    public function mount()
    {
        $this->clientes = Cliente::all();
    }

    public function eliminar($id)
    {
        if ($cliente = Cliente::find($id)) {
            $cliente->delete();
            $this->atualizarClientes();
            session()->flash('message', 'Cliente excluído com sucesso.');
        } else {
            session()->flash('error', 'Cliente não encontrado.');
        }
    }

    public function dadosUser($id)
    {
        return User::find($id);
    }

    public function render()
    {
        return view('livewire.cliente.lista');
    }
}
