<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inclusoes extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagens_inclusoes",
        "nome_inclusoes",
        "status_inclusoes",
    ];
}
