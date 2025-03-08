<?php

use App\Http\Controllers\Actividade\ActividadeController;
use Illuminate\Support\Facades\Route;

Route::prefix("actividades")->name("actividades.")->group(function () {
    Route::get("/cadastrar", [ActividadeController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [ActividadeController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [ActividadeController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});