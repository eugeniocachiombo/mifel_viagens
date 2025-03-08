<?php

use App\Http\Controllers\Reserva\ReservaController;
use Illuminate\Support\Facades\Route;


Route::prefix("reserva")->name("reserva.")->group(function () {
    Route::get("/reservar", [ReservaController::class, "reservar"])->name("reservar");
    Route::get("/lista", [ReservaController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [ReservaController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});