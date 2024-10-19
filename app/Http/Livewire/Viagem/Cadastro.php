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
    public $duracao_viagens;
    public $vagas_viagens;
    public $preco_viagens;
    public $status_viagens;

    public $tipoviagens, $destinos, $cod_destino, $cod_tipoviagem;

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
            'duracao_viagens' => $this->duracao_viagens,
            'vagas_viagens' => $this->vagas_viagens,
            'preco_viagens' => $this->preco_viagens,
            'status_viagens' => $this->status_viagens,
        ]);

        $this->emit('alerta', ['mensagem' => 'Cadastrado com sucesso', 'icon' => 'success']);
        $this->reset();
    }
}
