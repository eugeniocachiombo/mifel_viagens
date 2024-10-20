<?php

namespace App\Http\Livewire\Viagem;

use App\Models\Destino;
use App\Models\DificuldadeViagem;
use App\Models\Pacotehospedagem;
use App\Models\Pacoterefeicao;
use App\Models\PacoteViagem;
use App\Models\Tipoviagem;
use App\Models\Viagem;
use Livewire\Component;

class Cadastro extends Component
{

    public $dificuldades, $titulo_viagens, $desc_viagens, $cod_dificuldade;
    public $EmDestaque_viagens, $duracao_viagem, $vagas_viagens; 
    public $preco_viagem, $status_viagens;

    public $tipoviagens, $destinos, $cod_destino, $cod_tipoviagem;
    public $dia_itinerario, $desc_itinerario;
    public $pacotesViagem, $pacoteEscolhido, $infoPacoteV;

    public $pacotesHospedagem, $pacoteHospId, $pacoteHospedagemEscolhido, $temPacHosp = false;
    public $pacotesRefeicao, $pacoteRefId, $pacoteRefeicaoEscolhido, $temPacRef = false;
    public $precoFinalHosp = [], $precoFinal = 0, $precoFinalRef = [];

    public $numMaxVaga;

    public function mount()
    {
        array_push($this->precoFinalHosp, ["hospedagem" => 0]);
        array_push($this->precoFinalRef, ["refeicao" => 0]);
        $this->pacotesHospedagem = Pacotehospedagem::all();
        $this->pacotesRefeicao = Pacoterefeicao::all();
        $this->pacotesViagem = PacoteViagem::all();
        $this->tipoviagens = Tipoviagem::all();
        $this->destinos = Destino::all();
        $this->dificuldades = DificuldadeViagem::all();
    }

    public function render()
    {
        $this->preco_viagem = $this->precoFinal;
        return view('livewire.viagem.cadastro');
    }

    public function pacoteHospListar()
    {
        if ($this->pacoteHospId != null) {
            $this->pacoteHospedagemEscolhido = Pacotehospedagem::find($this->pacoteHospId);
            array_push($this->precoFinalHosp, ["hospedagem" => $this->pacoteHospedagemEscolhido->preco_pacoteHospedagem]);
            $this->vagas_viagens = $this->pacoteHospedagemEscolhido->max_qtd_pessoas;
            $this->numMaxVaga = $this->pacoteHospedagemEscolhido->max_qtd_pessoas;
        } else {
            array_push($this->precoFinalHosp, ["hospedagem" => 0]);
            $this->pacoteHospedagemEscolhido = null;
        }
        $this->precoAdicionalPacotes();
    }

    public function pacoteRefListar()
    {
        if ($this->pacoteRefId != null) {
            $this->pacoteRefeicaoEscolhido = Pacoterefeicao::find($this->pacoteRefId);
            array_push($this->precoFinalRef, ["refeicao" => $this->pacoteRefeicaoEscolhido->preco_pacoteRefeicao]);
        } else {
            array_push($this->precoFinalRef, ["refeicao" => 0]);
            $this->pacoteRefeicaoEscolhido = null;
        }
        $this->precoAdicionalPacotes();
    }

    public function precoAdicionalPacotes(){
        if ($this->pacoteEscolhido != null) {
            $this->infoPacoteV = PacoteViagem::where("id", $this->pacoteEscolhido)->first();
            $this->precoFinal = $this->infoPacoteV->preco_pacote + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function autoPreencher()
    {
        if ($this->pacoteEscolhido != null) {
            $this->infoPacoteV = PacoteViagem::where("id", $this->pacoteEscolhido)->first();
            $this->cod_destino = $this->infoPacoteV->id_destino;
            $this->cod_tipoviagem = $this->infoPacoteV->id_tipoviagem;
            $this->precoFinal = $this->infoPacoteV->preco_pacote;
            $this->dia_itinerario = $this->infoPacoteV->dia_itinerario;
            $this->desc_itinerario = $this->infoPacoteV->desc_itinerario;
            $this->duracao_viagem = $this->infoPacoteV->duracao_viagem;
            $this->preco_viagem = $this->infoPacoteV->preco_pacote;
            $this->precoFinal = $this->infoPacoteV->preco_pacote + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function mudarPrecario()
    {
        if ($this->cod_tipoviagem != null && $this->cod_destino != null && $this->pacoteEscolhido != null) {
            $novoInfoPacote = PacoteViagem::where("id_destino", $this->cod_destino)
                ->where("id_tipoviagem", $this->cod_tipoviagem)
                ->first();
            $this->precoFinal = $novoInfoPacote->preco_pacote + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function cadastrar()
    {
        $this->validate();

        Viagem::create([
            'titulo_viagens' => $this->titulo_viagens,
            'desc_viagens' => $this->desc_viagens,
            'cod_dificuldade' => $this->cod_dificuldade,
            'EmDestaque_viagens' => $this->EmDestaque_viagens,
            'duracao_viagem' => $this->duracao_viagem,
            'vagas_viagens' => $this->vagas_viagens,
            'preco_viagem' => $this->preco_viagem,
            'status_viagens' => $this->status_viagens,
        ]);

        $this->emit('alerta', ['mensagem' => 'Cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
