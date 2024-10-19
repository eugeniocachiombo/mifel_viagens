<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacotehospedagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "titulo_pacoteHospedagem",
        "desc_pacoteHospedagem",
        "preco_pacoteHospedagem",
        "status_pacoteHospedagem",
        "max_qtd_pessoas",
    ];
}
