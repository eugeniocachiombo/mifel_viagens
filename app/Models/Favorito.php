<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagem_favoritos",
        "cod_cliente_favoritos",
        "data_adicao_favoritos",
    ];
}
