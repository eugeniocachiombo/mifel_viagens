<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome_cliente",
        "sobrenome_cliente",
        "estado_cliente",
        "id_usuario",
    ];
}
