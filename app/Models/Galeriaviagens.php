<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeriaviagens extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagens_galeriaViagens",
        "foto_principal",
        "foto2",
        "foto3",
        "video",
        "status_galeria",
    ];
}
