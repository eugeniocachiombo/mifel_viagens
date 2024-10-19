<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacoterefeicao extends Model
{
    use HasFactory;

    protected $fillable = [
        "titulo_pacoteRefeicao",
        "desc_pacoteRefeicao",
        "preco_pacoteRefeicao",
        "status_pacoteRefeicao",
    ];
}
