<?php

namespace App\Http\Livewire\Reserva;

use App\Models\Pacotehospedagem;
use App\Models\Pacoterefeicao;
use App\Models\Viagem;
use Livewire\Component;

class Reservar extends Component
{
    public $num_viajantes;
    public $pacotesViagem, $viagemEscolhida, $infoPacoteV;

    public $pacotesHospedagem, $pacoteHospId, $pacoteHospArrayEscolha, $temPacHosp = false;
    public $pacotesRefeicao, $pacoteRefId, $pacoteRefArrayEscolha, $temPacRef = false;
    public $precoFinalHosp = [], $precoFinal = 0, $precoFinalRef = [];

    public $numMaxVaga;

    public function mount()
    {
        array_push($this->precoFinalHosp, ["hospedagem" => 0]);
        array_push($this->precoFinalRef, ["refeicao" => 0]);
        $this->pacotesHospedagem = Pacotehospedagem::all();
        $this->pacotesRefeicao = Pacoterefeicao::all();
        $this->pacotesViagem = Viagem::where("status_viagem", 1)->get();
    }

    public function render()
    {
        return view('livewire.reserva.reservar');
    }

    public function pacoteHospListar()
    {
        if ($this->pacoteHospId != null) {
            $this->pacoteHospArrayEscolha = Pacotehospedagem::find($this->pacoteHospId);
            array_push($this->precoFinalHosp, ["hospedagem" => $this->pacoteHospArrayEscolha->preco_pacoteHospedagem]);
            $this->num_viajantes = $this->pacoteHospArrayEscolha->max_qtd_pessoas;
            $this->numMaxVaga = $this->pacoteHospArrayEscolha->max_qtd_pessoas;
        } else {
            array_push($this->precoFinalHosp, ["hospedagem" => 0]);
            $this->pacoteHospArrayEscolha = null;
        }
        $this->precoAdicionalPacotes();
    }

    public function pacoteRefListar()
    {
        if ($this->pacoteRefId != null) {
            $this->pacoteRefArrayEscolha = Pacoterefeicao::find($this->pacoteRefId);
            array_push($this->precoFinalRef, ["refeicao" => $this->pacoteRefArrayEscolha->preco_pacoteRefeicao]);
        } else {
            array_push($this->precoFinalRef, ["refeicao" => 0]);
            $this->pacoteRefArrayEscolha = null;
        }
        $this->precoAdicionalPacotes();
    }

    public function precoAdicionalPacotes()
    {
        if ($this->viagemEscolhida != null) {
            $this->infoPacoteV = Viagem::where("id", $this->viagemEscolhida)->first();
            $this->precoFinal = $this->infoPacoteV->preco_pacote + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function autoPreencher()
    {
        if ($this->viagemEscolhida != null) {

            $this->infoPacoteV = Viagem::where("id", $this->viagemEscolhida)->first();
            /*$this->cod_destino = $this->infoPacoteV->id_destino;
            $this->cod_tipoviagem = $this->infoPacoteV->id_tipoviagem;
            $this->precoFinal = $this->infoPacoteV->preco_pacote;
            $this->dia_itinerario = $this->infoPacoteV->dia_itinerario;
            $this->desc_itinerario = $this->infoPacoteV->desc_itinerario;
            $this->duracao_viagem = $this->infoPacoteV->duracao_viagem;
            $this->preco_viagem = $this->infoPacoteV->preco_pacote;*/
            $this->precoFinal = $this->infoPacoteV->preco_pacote + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function mudarPrecario()
    {
        if ($this->cod_tipoviagem != null && $this->cod_destino != null && $this->viagemEscolhida != null) {
            $novoInfoPacote = Viagem::where("id_destino", $this->cod_destino)
                ->where("id_tipoviagem", $this->cod_tipoviagem)
                ->first();
            $this->viagemEscolhida = $novoInfoPacote->id;
            $this->precoFinal = $novoInfoPacote->preco_pacote + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function reservar()
    {
        /* Reservas::create([
        'cod_viagem' => $this->cod_viagem,
        'data_resevada' => $this->data_resevada,
        'num_viajantes' => $this->num_viajantes,
        'total_reserva' => $this->total_reserva,
        'status_reservas' => $this->status_reservas,
        'id_usuario' => Auth::user()->id,
        ]);*/

         /*
        Carrinho::create([
        "id_usuario" => Auth::user()->id,
        "id_pacote_viagems" => $this->viagemEscolhida,
        "id_pacotehospedagems" => $this->pacoteHospId,
        "id_pacoterefeicaos" =>$this->pacoteRefId,
        "id_viagem" => $viagem->id
        ]);
         */

        $this->emit('alerta', ['mensagem' => 'Reserva realizada com sucesso', 'icon' => 'success']);
        $this->reset();

        $this->limparCampos();
    }

    public function limparCampos(){
        $this->viagemEscolhida = $this->infoPacoteV = null;

        $this->pacoteHospId = $this->pacoteHospArrayEscolha = $this->temPacHosp = false;
        $this->pacoteRefId = $this->pacoteRefArrayEscolha = $this->temPacRef = false;

        $this->precoFinal = 0;
        array_push($this->precoFinalHosp, ["hospedagem" => 0]);
        array_push($this->precoFinalRef, ["refeicao" => 0]);
        $this->numMaxVaga = null;
    }

}
