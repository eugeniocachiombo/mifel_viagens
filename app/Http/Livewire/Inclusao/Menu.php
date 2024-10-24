<?php

namespace App\Http\Livewire\Inclusao;

use Livewire\Component;

class Menu extends Component
{
    public $listeners = ["inclusaoTempoReal"];
    public function render()
    {
        return view('livewire.inclusao.menu');
    }

    public function inclusaoTempoReal(){}
}
