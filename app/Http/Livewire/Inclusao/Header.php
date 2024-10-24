<?php

namespace App\Http\Livewire\Inclusao;

use App\Models\Carrinho;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $carrinho, $listeners = ["headerTempoReal"];

    public function mount(){
        $this->carrinho = [];
    }
    public function render()
    {
        if (Auth::user()) {
            $this->carrinho = Carrinho::where("id_usuario",  Auth::user()->id)->get();
        }
        return view('livewire.inclusao.header');
    }

    public function headerTempoReal(){}
    
}
