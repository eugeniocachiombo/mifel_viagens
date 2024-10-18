<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Cadastro extends Component
{
    public $nome;
    public $sobrenome;
    public $email;
    public $telefone;
    public $password;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'sobrenome' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'telefone' => 'required|string|max:15|unique:users,telefone',
        'password' => 'required|string|min:6',
    ];

    protected $messages = [
        'nome.required' => 'O campo Nome é obrigatório.',
        'sobrenome.required' => 'O campo Sobrenome é obrigatório.',
        'email.required' => 'O campo Email é obrigatório.',
        'email.email' => 'O campo Email deve ser um endereço de email válido.',
        'email.unique' => 'Este Email já está cadastrado.',
        'telefone.required' => 'O campo Telefone é obrigatório.',
        'telefone.unique' => 'Este Telefone já está cadastrado.',
        'password.required' => 'O campo Senha é obrigatório.',
        'password.min' => 'A Senha deve ter pelo menos 6 caracteres.',
    ];

    public function render()
    {
        return view('livewire.usuario.cadastro');
    }

    public function cadastrar()
    {
        $this->validate();

        $user = User::create([
            'name' => "{$this->nome} {$this->sobrenome}",
            'email' => $this->email,
            'telefone' => $this->telefone,
            'password' => Hash::make($this->password),
            'id_acesso' => 2,
        ]);

        Cliente::create([
            'nome_cliente' => $this->nome,
            'sobrenome_cliente' => $this->sobrenome,
            'id_usuario' => $user->id,
        ]);

        $this->emit('alerta', ['mensagem' => 'Cadastrado com sucesso', 'icon' => 'success']);
        $this->limparCampos();
    }

    private function limparCampos()
    {
        $this->nome = '';
        $this->sobrenome = '';
        $this->email = '';
        $this->telefone = '';
        $this->password = '';
    }
}
