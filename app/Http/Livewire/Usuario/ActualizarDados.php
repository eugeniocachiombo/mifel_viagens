<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Admin;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class ActualizarDados extends Component
{
    public $nome;
    public $sobrenome;
    public $email;
    public $telefone;
    public $userId;
    public $id_acesso;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'sobrenome' => 'required|string|max:255',
        'email' => 'required|email',
        'telefone' => 'required|string|max:9|min:9',
    ];

    protected $messages = [
        'nome.required' => 'O campo Nome é obrigatório.',
        'sobrenome.required' => 'O campo Sobrenome é obrigatório.',
        'email.required' => 'O campo Email é obrigatório.',
        'email.email' => 'O campo Email deve ser um endereço de email válido.',
        'email.unique' => 'Este Email já está cadastrado.',
        'telefone.required' => 'O campo Telefone é obrigatório.',
        'telefone.unique' => 'Este Telefone já está cadastrado.',
        'telefone.min' => 'Este Telefone deve conter somente 9 digitos.',
        'telefone.max' => 'Este Telefone deve conter somente 9 digitos.',
    ];

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $rules = [
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'telefone' => 'required|string|min:9|max:9|unique:users,telefone,' . $user->id,
        ];
        $this->validate($request, $rules);
    }

    public function mount($id)
    {
        $user = User::find($id);
        $cliente = Cliente::where("id_usuario", $user->id)->first();
        $admin = Admin::where("id_usuario", $user->id)->first();

        if ($user->id_acesso == 1) {
            $this->nome = $admin->nome_admin;
            $this->sobrenome = $admin->sobrenome_admin;
        } else {
            $this->nome = $cliente->nome_cliente;
            $this->sobrenome = $cliente->sobrenome_cliente;
        }

        $this->email = $user->email;
        $this->telefone = $user->telefone;
        $this->userId = $user->id;
        $this->id_acesso = $user->id_acesso;
    }

    public function render()
    {
        return view('livewire.usuario.actualizar-dados')
        ->layout("layouts.usuario.dados-pessoais");
    }

    public function actualizar()
    {
        $this->validate();

        $user = User::find($this->userId);
        $user->name = "{$this->nome} {$this->sobrenome}";
        $user->email = $this->email;
        $user->telefone = $this->telefone;
        $user->save();

        if ($this->id_acesso == 1) {
            $admin = Admin::where('id_usuario', $this->userId)->first();
            if ($admin) {
                $admin->nome_admin = $this->nome;
                $admin->sobrenome_admin = $this->sobrenome;
                $admin->save();
            }

        } elseif ($this->id_acesso == 2) {

            $cliente = Cliente::where('id_usuario', $this->userId)->first();
            if ($cliente) {
                $cliente->nome_cliente = $this->nome;
                $cliente->sobrenome_cliente = $this->sobrenome;
                $cliente->save();
            }
        }

        $this->emit('alerta', ['mensagem' => 'Actualizado com sucesso', 'icon' => 'success']);
    }
}
