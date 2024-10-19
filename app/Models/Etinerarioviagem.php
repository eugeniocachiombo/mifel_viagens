<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etinerarioviagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagens_ev",
        "dia_etinerarioViagem",
        "desc_etinerarioViagem",
        "status_etinerario",
    ];
}
