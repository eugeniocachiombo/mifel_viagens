<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoviagem_viagens extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagens",
        "cod_tipoviagem",
    ];
}
