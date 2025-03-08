<?php

use App\Http\Controllers\PacoteViagem\PacoteViagemController;
use Illuminate\Support\Facades\Route;

Route::prefix("pacote/viagem")->name("pacote.viagem.")->group(function () {
    Route::get("/cadastrar", [PacoteViagemController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [PacoteViagemController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [PacoteViagemController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});