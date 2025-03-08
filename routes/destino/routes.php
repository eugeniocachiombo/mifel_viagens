<?php

use App\Http\Controllers\Destino\DestinoController;
use Illuminate\Support\Facades\Route;

Route::prefix("destino")->name("destino.")->group(function () {
    Route::get("/cadastrar", [DestinoController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [DestinoController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [DestinoController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});