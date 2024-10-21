<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "titulo_viagem",
        "desc_viagem",
        "cod_dificuldade",
        "EmDestaque_viagem",
        "duracao_viagem",
        "vagas_viagem",
        "preco_viagem",
        "status_viagem",
        "estrelas_viagem",
        "data_viagem",
        "id_usuario",
    ];
}
