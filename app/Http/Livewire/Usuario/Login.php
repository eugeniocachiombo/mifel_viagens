<?php

namespace App\Http\Livewire\Usuario;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $telEmail, $senha, $lembreMe;

    public function render()
    {
        return view('livewire.usuario.login')
        ->layout("layouts.login.app");
    }

    public function logar()
    {
        try {
            $usuario = User::where('email', $this->telEmail)
                ->orWhere('telefone', $this->telEmail)
                ->first();

            if ($usuario && Hash::check($this->senha, $usuario->password)) {

                Auth::login($usuario);
                if ($this->lembreMe == true) {
                    cookie("milfe_sessao_iniciada", "milfe_sessao_iniciada", 60);
                }
                return redirect()->route('usuario.pagina_inicial');
                
            } else {
                $this->emit('alerta', ['mensagem' => 'Verifique os seus dados', 'icon' => 'error', 'tempo' => 3000]);
            }

        } catch (QueryException $th) {
            $this->emit('alerta', ['mensagem' => 'Nenhuma conexão com a Base de dados', 'icon' => 'error', 'tempo' => 3000]);
        }
    }

    public function limparCampos()
    {
        $this->telEmail = $this->senha = null;
    }
}
