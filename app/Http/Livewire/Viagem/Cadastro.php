<?php

namespace App\Http\Livewire\Viagem;

use App\Models\Carrinho;
use App\Models\Destino;
use App\Models\DificuldadeViagem;
use App\Models\Pacotehospedagem;
use App\Models\Pacoterefeicao;
use App\Models\PacoteViagem;
use App\Models\Tipoviagem;
use App\Models\Viagem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cadastro extends Component
{

    public $dificuldades, $titulo_viagens, $desc_viagens, $cod_dificuldade;
    public $EmDestaque_viagens, $duracao_viagem, $vagas_viagens;
    public $preco_viagem, $data_viagem;

    public $tipoviagens, $destinos, $cod_destino, $cod_tipoviagem;
    public $dia_itinerario, $desc_itinerario;
    public $pacotesViagem, $pacoteEscolhido, $infoPacoteV;

    public $pacotesHospedagem, $pacoteHospId, $pacoteHospArrayEscolha, $temPacHosp = false;
    public $pacotesRefeicao, $pacoteRefId, $pacoteRefArrayEscolha, $temPacRef = false;
    public $precoFinalHosp = [], $precoFinal = 0, $precoFinalRef = [];

    public $numMaxVaga;

    protected $rules = [
        'titulo_viagens' => 'required|string|max:255',
        'desc_viagens' => 'nullable|string|max:1000',
        'cod_dificuldade' => 'required',
        'duracao_viagem' => 'required|integer|min:1',
        'vagas_viagens' => 'required|integer|min:1',
        'preco_viagem' => 'required|numeric|min:0',
        'data_viagem' => 'required|date|after:today',
    ];

    protected $messages = [
        'titulo_viagens.required' => 'O título da viagem é obrigatório.',
        'titulo_viagens.string' => 'O título da viagem deve ser um texto.',
        'titulo_viagens.max' => 'O título da viagem não pode ter mais de 255 caracteres.',

        'desc_viagens.string' => 'A descrição da viagem deve ser um texto.',
        'desc_viagens.max' => 'A descrição da viagem não pode ter mais de 1000 caracteres.',

        'cod_dificuldade.required' => 'Você deve selecionar uma dificuldade.',

        'duracao_viagem.required' => 'A duração da viagem é obrigatória.',
        'duracao_viagem.integer' => 'A duração da viagem deve ser um número inteiro.',
        'duracao_viagem.min' => 'A duração da viagem deve ser de pelo menos 1 dia.',

        'vagas_viagens.required' => 'O número de vagas é obrigatório.',
        'vagas_viagens.integer' => 'O número de vagas deve ser um número inteiro.',
        'vagas_viagens.min' => 'O número de vagas deve ser pelo menos 1.',

        'preco_viagem.required' => 'O preço da viagem é obrigatório.',
        'preco_viagem.numeric' => 'O preço da viagem deve ser um número.',
        'preco_viagem.min' => 'O preço da viagem não pode ser negativo.',

        'data_viagem.required' => 'A data da viagem é obrigatória.',
        'data_viagem.date' => 'A data da viagem deve ser uma data válida.',
        'data_viagem.after' => 'A data da viagem deve ser uma data futura.',
    ];

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
            $this->pacoteHospArrayEscolha = Pacotehospedagem::find($this->pacoteHospId);
            array_push($this->precoFinalHosp, ["hospedagem" => $this->pacoteHospArrayEscolha->preco_pacoteHospedagem]);
            $this->vagas_viagens = $this->pacoteHospArrayEscolha->max_qtd_pessoas;
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
            $this->pacoteEscolhido = $novoInfoPacote->id;
            $this->precoFinal = $novoInfoPacote->preco_pacote + end($this->precoFinalHosp)["hospedagem"] + end($this->precoFinalRef)["refeicao"];
        }
    }

    public function adicionarAoCarrinho()
    {
        $this->validate();

        $viagem = Viagem::create([
            'titulo_viagem' => $this->titulo_viagens,
            'desc_viagem' => $this->desc_viagens,
            'cod_dificuldade' => $this->cod_dificuldade,
            'duracao_viagem' => $this->duracao_viagem,
            'vagas_viagem' => $this->vagas_viagens,
            'preco_viagem' => $this->preco_viagem,
            'data_viagem' => $this->data_viagem,
            "status_viagem" => 0
        ]);

        Carrinho::create([
            "id_usuario" => Auth::user()->id,
            "id_pacote_viagems" => $this->pacoteEscolhido,
            "id_pacotehospedagems" => $this->pacoteHospId,
            "id_pacoterefeicaos" =>$this->pacoteRefId,
            "id_viagem" => $viagem->id
        ]);

        $this->emit('alerta', [
            'mensagem' => 'Adicionado ao carrinho com sucesso',
            'icon' => 'success',
            'tempo' => 4000,
        ]);

        $this->limparCampos();
    }

    public function limparCampos()
    {
        $this->titulo_viagens = $this->desc_viagens = $this->cod_dificuldade = null;
        $this->EmDestaque_viagens = $this->duracao_viagem = $this->vagas_viagens = null;
        $this->preco_viagem = $this->data_viagem = null;

        $this->cod_destino = $this->cod_tipoviagem = null;
        $this->dia_itinerario = $this->desc_itinerario = null;
        $this->pacoteEscolhido = $this->infoPacoteV = null;

        $this->pacoteHospId = $this->pacoteHospArrayEscolha = $this->temPacHosp = false;
        $this->pacoteRefId = $this->pacoteRefArrayEscolha = $this->temPacRef = false;
        $this->precoFinalHosp = [];
        $this->precoFinal = 0;
        $this->precoFinalRef = [];

        $this->numMaxVaga = null;
    }

}
