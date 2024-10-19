<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinosviagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagens_dv",
        "cod_destinos_dv",
        "status_destinosViagem",
    ];
}
