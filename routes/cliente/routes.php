<?php

use App\Http\Controllers\Cliente\ClienteController;
use Illuminate\Support\Facades\Route;

Route::prefix("cliente")->name("cliente.")->group(function () {
    Route::get("/lista", [ClienteController::class, "listar"])->name("lista")->middleware("usuario.logado");
});