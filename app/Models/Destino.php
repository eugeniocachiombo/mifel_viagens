<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome_destino",
        "desc_destino",
        "img_destino",
        "status_destino",
    ];
}
