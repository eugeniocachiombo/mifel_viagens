<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagem",
        "data_resevada",
        "num_viajantes",
        "total_reserva",
        "status_reservas",
        "status_pgt_reserva",
        "cod_refeicao_reserva",
        "cod_hospedagem_reserva",
        "Data_Criacao",
        "Data_Atualizacao",
        "id_usuario",
    ];
}
