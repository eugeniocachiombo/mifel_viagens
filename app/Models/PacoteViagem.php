<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacoteViagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "titulo_pacote",
        "desc_pacote",
        "preco_pacote",
        "id_destino",
        "id_tipoviagem",
        "status_pacote",

        "dia_itinerario",
        "desc_itinerario",
        "duracao_viagem",

        "max_qtd_pessoas",
    ];
}
