<?php

namespace App\Http\Controllers\Reserva;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function reservar()
    {
        return view("reserva.reservar");
    }

    public function listar()
    {
        return view("reserva.lista");
    }

    public function actualizar($id)
    {
        return view("reserva.actualizar", ["id" => $id]);
    }
}
