<?php

namespace App\Http\Livewire\Carrinho;

use App\Models\Carrinho;
use App\Models\Destino;
use App\Models\Destinosviagem;
use App\Models\Reservas;
use App\Models\Tipoviagem;
use App\Models\Tipoviagem_viagens;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Confirmar extends Component
{
    public $id_carrinho, $carrinhos, $numero, $codigo;

    protected $rules = [
        'numero' => 'required',
        'codigo' => 'required',
    ];

    protected $messages = [
        'numero.required' => 'O número é obrigatório.',
        'codigo.required' => 'O código é obrigatório.',
    ];

    public function render()
    {
        $this->carrinhos = Carrinho::where("id_usuario", Auth::user()->id)->get();
        return view('livewire.carrinho.confirmar')->layout("layouts.usuario.app");
    }

    public function escolherReserva($id_carrinho){
        $this->id_carrinho = $id_carrinho;
    }

    public function confirmar()
    {

        $carrinho = Carrinho::find($this->id_carrinho);
        $preco_viagem = $carrinho->buscarReserva->buscarPacoteViagem->preco_viagem;
        $preco_hospedagem = $carrinho->buscarPacoteHospedagem->preco_pacoteHospedagem;
        $preco_refeicao = $carrinho->buscarPacoteRefeicao->preco_pacoteRefeicao;
        $quantia =  $preco_viagem + $preco_hospedagem + $preco_refeicao;

        $http = Http::post(env('api_url') . "/api/pagar/com/cartao", [
            "num" => $this->numero,
            "codigo" => $this->codigo,
            "quantia" => $quantia,
            "descricao" => "Pagamento de reserva de viagem, na Agência Mifel Viagens"
        ]);

        if ($http->successful()) {
            $requisicao = $http->json();
            $estado = $requisicao["data"][0];
            $msg = $requisicao["data"][1];

            if ($estado) {
                $reserva = $this->actualizarReserva($this->id_carrinho);
                $pdf = $this->gerarPDF($reserva);
                $this->emit('fecharModal');
                $this->numero = $this->codigo = $this->id_carrinho = null;
                return response()->download($pdf);
            } else {
                $this->emit('alerta', ['mensagem' => $msg, 'icon' => 'error', 'tempo' => 3000]);
            }
        } else {
            $this->emit('alerta', ['mensagem' => 'Falha no pagamento', 'icon' => 'error']);
        }
    }

    public function actualizarReserva($id_carrinho)
    {
        $carrinho = Carrinho::find($id_carrinho);
        $reserva = Reservas::find($carrinho->id_reserva);
        $codReserva = $this->gerarCodReserva();
        $reserva->update([
            "cod_reserva" => $codReserva,
            "status_reservas" => 'Reservado',
        ]);
        $this->emit('alerta', ['mensagem' => 'Reserva feita com sucesso', 'icon' => 'success', 'tempo' => 4000]);
        return $reserva;
    }

    public function gerarPDF($reserva)
    {
        $carrinho = Carrinho::where("id_reserva", $reserva->id)->first();
        $hospedagem = $carrinho->buscarPacoteHospedagem;
        $refeicao = $carrinho->buscarPacoteRefeicao;
        $viagem = $carrinho->buscarReserva->buscarPacoteViagem;
        $destino_v = Destinosviagem::where("cod_viagens_dv", $viagem->id)->first();
        $destino = Destino::find($destino_v->cod_destinos_dv);
        $tipoViagem_v = Tipoviagem_viagens::where("cod_viagens", $viagem->id)->first();
        $tipoViagem = Tipoviagem::find($tipoViagem_v->cod_tipoviagem);
        $data = $this->formatarData($reserva->data_resevada);

        // PDF
        $pdf = FacadePdf::loadView('pdf.comprovativo', [
            'reserva' => $reserva,
            'carrinho' => $carrinho,
            'hospedagem' => $hospedagem,
            'refeicao' => $refeicao,
            'viagem' => $viagem,
            'destino' => $destino,
            'tipoViagem' => $tipoViagem,
            'usuario' => Auth::user(),
            'data' => $data,
        ]);
        $pdfDirectory = public_path('pdfs');

        if (!file_exists($pdfDirectory)) {
            mkdir($pdfDirectory, 0755, true);
        }

        $pdfPath = "$pdfDirectory/comprovativo_reserva_$reserva->cod_reserva.pdf";
        $pdf->save($pdfPath);
        $carrinho->delete();
        return $pdfPath;
    }

    public function gerarCodReserva()
    {
        $ultimoRegistro = Reservas::select("id")->orderBy("id", "desc")->first();
        $ultimoId = $ultimoRegistro ? $ultimoRegistro->id + 1 : 1;
        $char = chr(rand(65, 90));
        $char2 = chr(rand(65, 90));
        return Auth::user()->id . $char . $ultimoId . $char2;
    }

    public function cancelar($id_carrinho)
    {
        $carrinho = Carrinho::find($id_carrinho);
        $reserva = Reservas::find($carrinho->id_reserva);
        $carrinho->delete();
        $reserva->delete();
        $this->emit('alerta', ['mensagem' => 'Reserva cancelada', 'icon' => 'warning', 'tempo' => 4000]);
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
