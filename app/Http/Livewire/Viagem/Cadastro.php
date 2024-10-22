<?php

namespace App\Http\Livewire\Viagem;

use App\Models\Destino;
use App\Models\Destinosviagem;
use App\Models\DificuldadeViagem;
use App\Models\Etinerarioviagem;
use App\Models\Pacotehospedagem;
use App\Models\Pacoterefeicao;
use App\Models\PacoteViagem;
use App\Models\Tipoviagem;
use App\Models\Tipoviagem_viagens;
use App\Models\Viagem;
use Livewire\Component;

class Cadastro extends Component
{

    public $dificuldades, $titulo_viagem, $desc_viagem, $cod_dificuldade;
    public $EmDestaque_viagens, $duracao_viagem, $vagas_viagem;
    public $preco_viagem, $data_viagem;

    public $tipoviagens, $destinos, $cod_destino, $cod_tipoviagem;
    public $dia_itinerario, $desc_itinerario;

    protected $rules = [
        'titulo_viagem' => 'required|string|max:255',
        'desc_viagem' => 'required|string|max:1000',
        'cod_dificuldade' => 'required',
        'duracao_viagem' => 'required|integer|min:1',
        'vagas_viagem' => 'required|integer|min:1',
        'preco_viagem' => 'required|string|max:255',
        'data_viagem' => 'required|date|after:today',
        'cod_destino' => 'required',
        'cod_tipoviagem' => 'required',
        'dia_itinerario' => 'required|integer|min:1',
        'desc_itinerario' => 'required|string|max:1000',
    ];

    protected $messages = [
        'titulo_viagem.required' => 'O título da viagem é obrigatório.',
        'titulo_viagem.string' => 'O título da viagem deve ser um texto.',
        'titulo_viagem.max' => 'O título da viagem não pode ter mais de 255 caracteres.',

        'desc_viagem.string' => 'O descrição é obrigatório.',
        'desc_viagem.required' => 'A descrição da viagem deve ser um texto.',
        'desc_viagem.max' => 'A descrição da viagem não pode ter mais de 1000 caracteres.',

        'cod_dificuldade.required' => 'Você deve selecionar uma dificuldade.',

        'duracao_viagem.required' => 'A duração da viagem é obrigatória.',
        'duracao_viagem.integer' => 'A duração da viagem deve ser um número inteiro.',
        'duracao_viagem.min' => 'A duração da viagem deve ser de pelo menos 1 dia.',

        'vagas_viagem.required' => 'O número de vagas é obrigatório.',
        'vagas_viagem.integer' => 'O número de vagas deve ser um número inteiro.',
        'vagas_viagem.min' => 'O número de vagas deve ser pelo menos 1.',

        'preco_viagem.required' => 'O preço da viagem é obrigatório.',
        'preco_viagem.string' => 'O preço da viagem deve ser um texto.',
        'preco_viagem.max' => 'O preço da viagem não pode ter mais de 255 caracteres.',

        'data_viagem.required' => 'A data da viagem é obrigatória.',
        'data_viagem.date' => 'A data da viagem deve ser uma data válida.',
        'data_viagem.after' => 'A data da viagem deve ser uma data futura.',

        'cod_destino.required' => 'O destino é obrigatório.',
        'cod_tipoviagem.required' => 'O Tipo de viagem é obrigatório.',

        'dia_itinerario.required' => 'O dia do itinerário é obrigatório.',
        'dia_itinerario.numeric' => 'O dia do itinerário deve ser um número.',
        'dia_itinerario.min' => 'O dia do itinerário não pode ser negativo.',

        'desc_itinerario.required' => 'A descrição do itinerário deve ser um texto.',
        'desc_itinerario.string' => 'A descrição é obrigatória.',
        'desc_itinerario.max' => 'A descrição do itinerário não pode ter mais de 1000 caracteres.',
    ];

    public function mount()
    {
        $this->tipoviagens = Tipoviagem::all();
        $this->destinos = Destino::all();
        $this->dificuldades = DificuldadeViagem::all();
    }

    public function render()
    {
        return view('livewire.viagem.cadastro');
    }

    public function cadastrar()
    {
        $this->validate();
        $preco1 = str_replace(".", "", $this->preco_viagem);
        $preco2 = str_replace(",", ".", $preco1);

        $viagem = Viagem::create([
            'titulo_viagem' => $this->titulo_viagem,
            'desc_viagem' => $this->desc_viagem,
            'cod_dificuldade' => $this->cod_dificuldade,
            'duracao_viagem' => $this->duracao_viagem,
            'vagas_viagem' => $this->vagas_viagem,
            'preco_viagem' => $preco2,
            'data_viagem' => $this->data_viagem,
            "status_viagem" => 1,
        ]);

        Destinosviagem::create([
            "cod_viagens_dv" => $viagem->id,
            "cod_destinos_dv" => $this->cod_destino,
        ]);

        Tipoviagem_viagens::create([
            "cod_viagens" => $viagem->id,
            "cod_tipoviagem" => $this->cod_tipoviagem,
        ]);

        Etinerarioviagem::create([
            "cod_viagens_ev" => $viagem->id,
            "dia_etinerarioViagem" => $this->dia_itinerario,
            "desc_etinerarioViagem" => $this->desc_itinerario,
        ]);

        $this->emit('alerta', [
            'mensagem' => 'Viagem cadastrada com sucesso',
            'icon' => 'success',
            'tempo' => 4000,
        ]);

        $this->limparCampos();
    }

    public function limparCampos()
    {
        $this->titulo_viagem = $this->desc_viagem = $this->cod_dificuldade = null;
        $this->EmDestaque_viagens = $this->duracao_viagem = $this->vagas_viagem = null;
        $this->preco_viagem = $this->data_viagem = null;

        $this->cod_destino = $this->cod_tipoviagem = null;
        $this->dia_itinerario = $this->desc_itinerario = null;
    }

}
