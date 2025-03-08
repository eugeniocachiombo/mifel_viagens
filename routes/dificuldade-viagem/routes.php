<?php

use App\Http\Controllers\DificuldadeViagem\DificuldadeViagemController;
use Illuminate\Support\Facades\Route;

Route::prefix("dificuldade/viagem")->name("dificuldade.viagem.")->group(function () {
    Route::get("/cadastrar", [DificuldadeViagemController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [DificuldadeViagemController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [DificuldadeViagemController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});