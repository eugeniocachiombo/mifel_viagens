<?php

namespace App\Http\Livewire\Usuario;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sair extends Component
{
    public function render()
    {
        Auth::logout();
         redirect()->route("anonimo");
         return view('livewire.usuario.sair');
    }
}
