<?php

namespace App\Http\Livewire\Viagem;

use App\Models\Destino;
use App\Models\DificuldadeViagem;
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

    public $precoFinal = 0;

    public function mount()
    {
        $this->pacotesViagem = PacoteViagem::all();
        $this->tipoviagens = Tipoviagem::all();
        $this->destinos = Destino::all();
        $this->dificuldades = DificuldadeViagem::all();
    }

    public function render()
    {
        return view('livewire.viagem.cadastro');
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
