<?php

namespace App\Http\Livewire\Reserva;

use App\Models\Reservas;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Reservar extends Component
{
    public $cod_viagem;
    public $data_resevada;
    public $num_viajantes = 1;
    public $total_reserva;
    public $status_reservas = 'Pendente';

    protected $rules = [
        'cod_viagem' => 'required|exists:viagems,id',
        'data_resevada' => 'required|date',
        'num_viajantes' => 'required|integer|min:1',
        'total_reserva' => 'nullable|numeric',
        'status_reservas' => 'required|in:Pendente,Reservado,Finalizada',
    ];

    protected $messages = [
        'cod_viagem.required' => 'O código da viagem é obrigatório.',
        'cod_viagem.exists' => 'O código da viagem deve existir.',
        'data_resevada.required' => 'A data reservada é obrigatória.',
        'data_resevada.date' => 'A data deve ser uma data válida.',
        'num_viajantes.required' => 'O número de viajantes é obrigatório.',
        'num_viajantes.integer' => 'O número de viajantes deve ser um número inteiro.',
        'num_viajantes.min' => 'O número mínimo de viajantes é 1.',
        'total_reserva.numeric' => 'O total da reserva deve ser um número.',
        'status_reservas.required' => 'O status da reserva é obrigatório.',
        'status_reservas.in' => 'O status da reserva deve ser Pendente, Reservado ou Finalizada.',
    ];

    public function reservar()
    {
        $this->validate();

        Reservas::create([
            'cod_viagem' => $this->cod_viagem,
            'data_resevada' => $this->data_resevada,
            'num_viajantes' => $this->num_viajantes,
            'total_reserva' => $this->total_reserva,
            'status_reservas' => $this->status_reservas,
            'id_usuario' => Auth::user()->id, 
        ]);

        $this->emit('alerta', ['mensagem' => 'Reserva realizada com sucesso', 'icon' => 'success']);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.reserva.reservar');
    }
}
