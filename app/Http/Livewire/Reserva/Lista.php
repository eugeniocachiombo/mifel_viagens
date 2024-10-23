<?php

namespace App\Http\Livewire\Reserva;

use App\Models\Destino;
use App\Models\Destinosviagem;
use App\Models\DificuldadeViagem;
use App\Models\Pacotehospedagem;
use App\Models\Pacoterefeicao;
use App\Models\Reservas;
use App\Models\Tipoviagem;
use App\Models\Tipoviagem_viagens;
use App\Models\Viagem;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Lista extends Component
{
    public $reservas = [];

    public function mount()
    {
        if (Auth::user() && Auth::user()->id_acesso == 2) {
            $this->reservas = Reservas::where("status_reservas", "Reservado")
                ->where("id_usuario", Auth::user()->id)
                ->get();
        } else {
            $this->reservas = Reservas::all();
        }
    }

    public function render()
    {
        return view('livewire.reserva.lista');
    }

    public function buscarReserva($id)
    {
        return Reservas::find($id);
    }

    public function buscarDestino($id)
    {
        return Destino::find($id);
    }

    public function buscarDestinoViagem($idViagem)
    {
        return Destinosviagem::where("cod_viagens_dv", $idViagem)->first();
    }

    public function buscarTipoViagem($id)
    {
        return Tipoviagem::find($id);
    }

    public function buscarTipoViagemViagens($idViagem)
    {
        return Tipoviagem_viagens::where("cod_viagens", $idViagem)->first();
    }

    public function buscarPacoteHospedagem($id)
    {
        return Pacotehospedagem::find($id);
    }

    public function buscarPacoteRefeicao($id)
    {
        return Pacoterefeicao::find($id);
    }

    public function buscarViagem($id)
    {
        return Viagem::find($id);
    }

    public function buscarDificuldade($id)
    {
        return DificuldadeViagem::find($id);
    }

    public function formatarData($data)
    {
        $dateTime = new DateTime($data);

        $meses = [
            1 => 'Jan',
            2 => 'Fev',
            3 => 'Mar',
            4 => 'Abr',
            5 => 'Mai',
            6 => 'Jun',
            7 => 'Jul',
            8 => 'Ago',
            9 => 'Set',
            10 => 'Out',
            11 => 'Nov',
            12 => 'Dez',
        ];

        $dia = $dateTime->format('j');
        $mes = $meses[(int) $dateTime->format('n')];
        $ano = $dateTime->format('Y');
        return "{$dia} de {$mes} de {$ano}";
    }
}
