<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome_actividade",
        "desc_actividade",
        "img_actividade",
        "status_actividade",
    ];
}
