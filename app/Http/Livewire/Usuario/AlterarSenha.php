<?php

namespace App\Http\Livewire\Usuario;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AlterarSenha extends Component
{
    public $senhaAtual;
    public $novaSenha;
    public $confirmarSenha;

    protected $rules = [
        'senhaAtual' => 'required|string',
        'novaSenha' => 'required|string|min:6',
        'confirmarSenha' => 'required|string|min:6|same:novaSenha', // Adiciona a validação para ser igual à nova senha
    ];
    
    protected $messages = [
        'senhaAtual.required' => 'A senha atual é obrigatória.',
        'novaSenha.required' => 'A nova senha é obrigatória.',
        'confirmarSenha.required' => 'A confirmação da nova senha é obrigatória.',
        'novaSenha.min' => 'A nova senha deve ter pelo menos 6 caracteres.',
        'confirmarSenha.min' => 'A confirmação deve ter pelo menos 6 caracteres.',
        'confirmarSenha.same' => 'A confirmação da nova senha deve ser igual à nova senha.', // Mensagem personalizada
    ];
    

    public function alterarSenha()
    {
        $this->validate();
    
        if (!Hash::check($this->senhaAtual, Auth::user()->password)) {
            $this->emit('alerta', ['mensagem' => 'A senha atual está incorreta.', 'icon' => 'error']);
            return;
        }
    
        User::where("id", Auth::user()->id)->update(['password' => Hash::make($this->novaSenha)]);
    
        $this->emit('alerta', ['mensagem' => 'Senha alterada com sucesso!', 'icon' => 'success']);
    
        $this->senhaAtual = '';
        $this->novaSenha = '';
        $this->confirmarSenha = '';
    }
    

    public function render()
    {
        return view('livewire.usuario.alterar-senha');
    }
}
