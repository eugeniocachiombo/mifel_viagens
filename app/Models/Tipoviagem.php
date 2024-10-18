<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoviagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome_tipoViagem",
        "desc_tipoViagem",
        "status_tipoViagem",
    ];
}
