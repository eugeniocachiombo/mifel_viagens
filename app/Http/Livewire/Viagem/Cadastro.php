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

    public $dificuldades;
    public $titulo_viagens;
    public $desc_viagens;
    public $cod_dificuldade;
    public $EmDestaque_viagens;
    public $duracao_viagem;
    public $vagas_viagens;
    public $preco_viagem;
    public $status_viagens;

    public $tipoviagens, $destinos, $cod_destino, $cod_tipoviagem;
    public $dia_itinerario, $desc_itinerario;
    public $pacotesViagem, $pacoteEscolhido, $infoPacoteV;
    
    public $pacotesHospedagem, $pacoteHospId, $pacoteHospedagemEscolhido, $temPacHosp = false;
    public $pacotesRefeicao, $pacoteRefId, $pacoteRefeicaoEscolhido, $temPacRef = false;
    public $precoFinal = 0, $precoAdicionalPacHosp, $precoAdicionalPacRef;

    public function mount()
    {
        $this->pacotesHospedagem = Pacotehospedagem::all();
        $this->pacotesRefeicao = Pacoterefeicao::all();
        $this->pacotesViagem = PacoteViagem::all();
        $this->tipoviagens = Tipoviagem::all();
        $this->destinos = Destino::all();
        $this->dificuldades = DificuldadeViagem::all();
    }

    public function render()
    {
        return view('livewire.viagem.cadastro');
    }

    public function pacoteHospListar(){
        if ($this->pacoteHospId != null) {
            $this->precoAdicionalPacHosp = 0;
            $this->pacoteHospedagemEscolhido = Pacotehospedagem::find($this->pacoteHospId); 
            $this->precoAdicionalPacHosp += $this->pacoteHospedagemEscolhido->preco_pacoteHospedagem;
            $this->temPacHosp = true;
            $this->adicionarPrecoHosp();
        }else{
            $this->pacoteHospedagemEscolhido = null;
            $this->temPacHosp = false;
            $this->adicionarPrecoHosp();
        }
    }

    public function pacoteRefListar(){
        if ($this->pacoteRefId != null) {
            $this->precoAdicionalPacRef = 0;
            $this->pacoteRefeicaoEscolhido = Pacoterefeicao::find($this->pacoteRefId); 
            $this->precoAdicionalPacRef += $this->pacoteRefeicaoEscolhido->preco_pacoteRefeicao;
            $this->temPacRef = true;
            $this->adicionarPrecoRef();
        }else{
            $this->pacoteRefeicaoEscolhido = null;
            $this->temPacRef = false;
            $this->adicionarPrecoRef();
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
        }
    }

    public function mudarPrecario(){
        if($this->cod_tipoviagem != null && $this->cod_destino != null && $this->pacoteEscolhido != null){
            $novoInfoPacote = PacoteViagem::where("id_destino", $this->cod_destino)
            ->where("id_tipoviagem", $this->cod_tipoviagem)
            ->first();
            $this->precoFinal = $novoInfoPacote->preco_pacote;
        }
    }

    public function adicionarPrecoHosp(){
        if($this->temPacHosp == true){
            $this->precoFinal += $this->precoAdicionalPacHosp;
        }else{
            $this->precoFinal -= $this->precoAdicionalPacHosp;
        }
    }

    public function adicionarPrecoRef(){
        if($this->temPacRef == true){
            $this->precoFinal += $this->precoAdicionalPacRef;
        }else{
            $this->precoFinal -= $this->precoAdicionalPacRef;
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
