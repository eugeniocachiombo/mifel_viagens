<?php

namespace App\Http\Livewire\Reserva;

use App\Models\Carrinho;
use App\Models\Destino;
use App\Models\Destinosviagem;
use App\Models\Pacotehospedagem;
use App\Models\Pacoterefeicao;
use App\Models\Reservas;
use App\Models\Tipoviagem;
use App\Models\Tipoviagem_viagens;
use App\Models\Viagem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Reservar extends Component
{
    public $pacotesViagem, $viagemEscolhida, $infoViagem;

    public $tipoviagens, $destinos, $cod_destino, $cod_tipoviagem;

    public $pacotesHospedagem, $pacoteHospId, $pacoteHospArrayEscolha, $temPacHosp = false;
    public $pacotesRefeicao, $pacoteRefId, $pacoteRefArrayEscolha, $temPacRef = false;
    public $precoFinalHosp = [], $precoFinal = 0, $precoFinalRef = [];

    public $data_resevada, $dataExiste;
    public $num_viajantes;
    public $total_reserva;
    public $numMaxVaga;

    protected $rules = [
        'cod_destino' => 'required',
        'cod_tipoviagem' => 'required',
        'pacoteHospId' => 'required',
        'pacoteRefId' => 'required',
        'data_resevada' => 'required|date|after:today',
        'num_viajantes' => 'required|integer|min:1|max:{$this->numMaxVaga}',
    ];

    protected $messages = [
        'cod_destino.required' => 'Por favor, selecione um destino.',
        'cod_tipoviagem.required' => 'Por favor, selecione um tipo de viagem.',
        'pacoteHospId.required' => 'Por favor, selecione um pacote de hospedagem.',
        'pacoteRefId.required' => 'Por favor, selecione um pacote de refeição.',
        'data_resevada.required' => 'Por favor, selecione uma data para a reserva.',
        'data_resevada.after' => 'A data deve ser futura.',
        'num_viajantes.required' => 'Por favor, informe o número de viajantes.',
        'num_viajantes.min' => 'O número mínimo de viajantes é 1.',
        'num_viajantes.max' => 'O número máximo de viajantes é {$this->numMaxVaga}.',
    ];

    public function mount()
    {
        array_push($this->precoFinalHosp, ["hospedagem" => 0]);
        array_push($this->precoFinalRef, ["refeicao" => 0]);
        $this->destinos = Destino::all();
        $this->tipoviagens = Tipoviagem::all();
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
            $this->infoViagem = Viagem::where("id", $this->viagemEscolhida)->first();
            $this->precoFinal = $this->infoViagem->preco_viagem + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function autoPreencher()
    {
        if ($this->viagemEscolhida != null) {
            $this->infoViagem = Viagem::where("id", $this->viagemEscolhida)->first();
            $destinoViagem = Destinosviagem::where("cod_viagens_dv", $this->infoViagem->id)->first();
            $tipoViagem_v = Tipoviagem_viagens::where("cod_viagens", $this->infoViagem->id)->first();

            $this->cod_destino = $destinoViagem->cod_destinos_dv;
            $this->cod_tipoviagem = $tipoViagem_v->cod_tipoviagem;
            $this->precoFinal = $this->infoViagem->preco_viagem;
            $this->precoFinal = $this->infoViagem->preco_viagem + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function mudarPrecario()
    {
        if ($this->cod_tipoviagem != null && $this->cod_destino != null && $this->viagemEscolhida != null) {
            $novoInfoPacote = Viagem::select("viagems.*")
                ->join("destinosviagems", "viagems.id", "=", "destinosviagems.cod_viagens_dv")
                ->join("tipoviagem_viagens", "viagems.id", "=", "tipoviagem_viagens.cod_viagens")
                ->where("cod_destinos_dv", number_format($this->cod_destino))
                ->where("cod_tipoviagem", number_format($this->cod_tipoviagem))
                ->first();

            if ($novoInfoPacote) {
                $this->viagemEscolhida = $novoInfoPacote->id;
                $this->precoFinal = $novoInfoPacote->preco_viagem + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
            } else {
                $this->emit('alerta', ['mensagem' => 'Pacote não disponível', 'icon' => 'warning', 'tempo' => 4000]);
            }
        }
    }

    public function adicionarAoCarrinho()
    {
        $this->validate();

        if (Auth::user()) {
            $dataBD = $this->verificarData($this->data_resevada);
            if (!$dataBD) {
                $reserva = Reservas::create([
                    "cod_viagem" => $this->viagemEscolhida,
                    "data_resevada" => $this->data_resevada,
                    "num_viajantes" => $this->num_viajantes,
                    "total_reserva" => $this->precoFinal,
                    "cod_refeicao_reserva" => $this->pacoteRefId,
                    "cod_hospedagem_reserva" => $this->pacoteHospId,
                    "status_reservas" => 'Pendente',
                    "status_pgt_reserva" => 0,
                    'id_usuario' => Auth::user()->id,
                ]);

                Carrinho::create([
                    "id_usuario" => Auth::user()->id,
                    "id_pacotehospedagems" => $this->pacoteHospId,
                    "id_pacoterefeicaos" => $this->pacoteRefId,
                    "id_reserva" => $reserva->id,
                ]);

                $this->emit('alerta', ['mensagem' => 'Adicionado ao carrinho com sucesso', 'icon' => 'success', 'tempo' => 4000]);
                $this->limparCampos();
            }
        } else {
            $this->emit('loginTab');
        }
    }

    public function verificarData($data)
    {
        $data = Reservas::where("data_resevada", $data)
            ->where("id_usuario", Auth::user()->id)
            ->first();
        if ($data) {
            $this->dataExiste = "Você já possui uma reserva com esta data!";
        } else {
            $this->dataExiste = null;
        }
        return $data;
    }

    public function limparCampos()
    {
        $this->cod_destino = $this->cod_tipoviagem = $this->dataExiste = null;
        $this->data_resevada = $this->num_viajantes = $this->total_reserva = $this->numMaxVaga;

        $this->viagemEscolhida = $this->infoViagem = null;

        $this->pacoteHospId = $this->pacoteHospArrayEscolha = $this->temPacHosp = false;
        $this->pacoteRefId = $this->pacoteRefArrayEscolha = $this->temPacRef = false;

        $this->precoFinal = 0;
        array_push($this->precoFinalHosp, ["hospedagem" => 0]);
        array_push($this->precoFinalRef, ["refeicao" => 0]);
        $this->numMaxVaga = null;
    }

}
