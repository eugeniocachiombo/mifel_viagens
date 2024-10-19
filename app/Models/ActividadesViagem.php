<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadesViagem extends Model
{
    use HasFactory;

    protected $fillable = [
        "cod_viagens",
        "cod_actividades",
        "status_actividadesViagem",
    ];
}
