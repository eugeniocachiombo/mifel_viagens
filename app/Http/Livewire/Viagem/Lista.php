<?php

namespace App\Http\Livewire\Viagem;

use App\Models\DificuldadeViagem;
use App\Models\User;
use App\Models\Viagem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Lista extends Component
{
    public $viagens;

    public function render()
    {
        if(Auth::user()->id_acesso == 2){
            $this->viagens = Viagem::where("status_viagem", 1)
            ->where("id_usuario", Auth::user()->id)
            ->get();
        }else{
             $this->viagens = Viagem::where("status_viagem", 1)->get();
        }
        return view('livewire.viagem.lista');
    }

    public function buscarUsuario($id){
        return User::find($id);
    }

    public function buscarDificuldade($id){
        return DificuldadeViagem::find($id);
    }

    public function eliminar($id){
        $viagem = Viagem::find($id);
        $viagem->delete();
        $this->emit('alerta', ['mensagem' => 'Viagem cancelada', 'icon' => 'warning', 'tempo' => 4000]);
    }
}
