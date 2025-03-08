<?php

use App\Http\Controllers\Carrinho\CarrinhoController;
use Illuminate\Support\Facades\Route;

Route::prefix("carrinho")->name("carrinho.")->group(function () {
    Route::get("/confirmar", [CarrinhoController::class, "confirmar"])->name("confirmar")->middleware("usuario.logado");
});