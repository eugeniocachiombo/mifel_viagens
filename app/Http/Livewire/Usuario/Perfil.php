<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Admin;
use App\Models\Cliente;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Perfil extends Component
{

    use WithFileUploads; 
    
    public $nome;
    public $sobrenome;
    public $email;
    public $telefone;
    public $tipoUsuario;
    public $foto, $novaFoto;

    public function mount($id)
    {
        $user = User::findOrFail($id);

        if ($user->id_acesso == 1) {
            $admin = Admin::where("id_usuario", $user->id)->first();
            if ($admin) {
                $this->nome = $admin->nome_admin;
                $this->sobrenome = $admin->sobrenome_admin;
                $this->email = $user->email;
                $this->telefone = $user->telefone;
                $this->foto = $user->foto;
                $this->tipoUsuario = 'Admin';
            }
        } elseif ($user->id_acesso == 2) {
            $cliente = Cliente::where("id_usuario", $user->id)->first();
            if ($cliente) {
                $this->nome = $cliente->nome_cliente;
                $this->sobrenome = $cliente->sobrenome_cliente;
                $this->email = $user->email;
                $this->telefone = $user->telefone;
                $this->foto = $user->foto;
                $this->tipoUsuario = 'Cliente';
            }
        }
    }

    public function uploadPhoto()
    {
        $this->validate([
            'novaFoto' => 'image|max:1024', 
        ]);

        $user = User::where('email', $this->email)->first();
        
        if ($this->novaFoto) {
            $path = $this->novaFoto->store('fotos_perfil', 'public');
            $user->foto = $path;
            $user->save();

            $this->foto = $path;
            $this->novaFoto = null;
            $this->emit('alerta', ['mensagem' => 'Foto atualizada com sucesso!', 'icon' => 'success']);
        }
    }

    public function render()
    {
        return view('livewire.usuario.perfil');
    }
}
