<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentariospost extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagem_comentarios",
        "cod_cliente_comentarios",
        "desc_comentario",
        "data_comentario",
        "status_comentario",
    ];
}
