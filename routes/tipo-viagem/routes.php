<?php

use App\Http\Controllers\TipoViagem\TipoViagemController;
use Illuminate\Support\Facades\Route;

Route::prefix("tipo/viagem")->name("tipo.viagem.")->group(function () {
    Route::get("/cadastrar", [TipoViagemController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [TipoViagemController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [TipoViagemController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});