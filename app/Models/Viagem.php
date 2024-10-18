<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "titulo_viagens",
        "desc_viagens",
        "cod_dificuldade",
        "EmDestaque_viagens",
        "duracao_viagens",
        "vagas_viagens",
        "preco_viagens",
        "status_viagens",
        "estrelas_viagens",
    ];
}
