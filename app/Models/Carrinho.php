<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_usuario",
        "id_pacote_viagems",
        "id_pacotehospedagems",
        "id_pacoterefeicaos",
        "id_reserva"
    ];
}
