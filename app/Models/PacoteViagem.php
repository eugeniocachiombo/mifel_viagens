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
        "max_qtd_pessoas",
    ];
}
