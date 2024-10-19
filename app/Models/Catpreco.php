<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catpreco extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome_catPreco",
        "desc_catPreco",
        "faixa_idade",
        "preco_catPreco",
        "status_catPreco",
    ];
}
