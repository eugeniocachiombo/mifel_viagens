<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DificuldadeViagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome_dificuldadeViagem",
        "desc_dificuldadeViagem",
        "status_dificuldadeViagem",
    ];
}
