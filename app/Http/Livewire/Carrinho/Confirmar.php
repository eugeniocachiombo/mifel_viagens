<?php

namespace App\Http\Livewire\Carrinho;

use App\Models\Carrinho;
use App\Models\Destino;
use App\Models\Destinosviagem;
use App\Models\DificuldadeViagem;
use App\Models\Pacotehospedagem;
use App\Models\Pacoterefeicao;
use App\Models\Reservas;
use App\Models\Tipoviagem;
use App\Models\Tipoviagem_viagens;
use App\Models\Viagem;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Confirmar extends Component
{
    public $carrinhos;

    public function render()
    {
        $this->carrinhos = Carrinho::where("id_usuario", Auth::user()->id)->get();
        return view('livewire.carrinho.confirmar');
    }

    public function habilitarCardPagamento(){

    }

    public function confirmar($id_carrinho)
    {
       /* $num = 52075292;
        $cod = 2400;
        $quantia = 1;
        $apiURL = env('api_url') . "/api/pagarComCartao/{$num}/{$cod}/{$quantia}";
        $http = Http::get($apiURL);
        if ($http->successful()) {
            dd($http->json());
        } else {
            dd($apiURL);
        }*/
        
        /*
        $reserva = $this->actualizarReserva($id_carrinho);
        $pdf = $this->gerarPDF($reserva);
        return response()->download($pdf);
        */
    }

    public function actualizarReserva($id_carrinho){
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

    public function gerarPDF($reserva){
        $carrinho = Carrinho::where("id_reserva", $reserva->id)->first();
        $hospedagem = $this->buscarPacoteHospedagem($reserva->cod_hospedagem_reserva);
        $refeicao = $this->buscarPacoteRefeicao($reserva->cod_refeicao_reserva);
        $viagem = $this->buscarViagem($reserva->cod_viagem);
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
