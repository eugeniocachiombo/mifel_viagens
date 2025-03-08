<?php

use App\Http\Controllers\Viagem\ViagemController;
use Illuminate\Support\Facades\Route;

Route::prefix("viagem")->name("viagem.")->group(function () {
    Route::get("/cadastrar", [ViagemController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [ViagemController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [ViagemController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});