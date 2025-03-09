<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_usuario",
        "id_pacotehospedagems",
        "id_pacoterefeicaos",
        "id_reserva"
    ];

    public function buscarUsuario(){
        return $this->belongsTo(User::class, "id_usuario", "id");
    }

    public function buscarPacoteHospedagem(){
        return $this->belongsTo(Pacotehospedagem::class, "id_pacotehospedagems", "id");
    }

    public function buscarPacoteRefeicao(){
        return $this->belongsTo(Pacoterefeicao::class, "id_pacoterefeicaos", "id");
    }

    public function buscarReserva(){
        return $this->belongsTo(Reservas::class, "id_reserva", "id");
    }
}
