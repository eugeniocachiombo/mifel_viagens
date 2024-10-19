<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapaviagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagens_mapaViagem",
        "iframe_mapaViagem",
        "img_mapaViagem",
        "status_mapaViagem",
    ];
}
