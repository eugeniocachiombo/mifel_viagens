<?php

use App\Http\Controllers\CatPreco\CatPrecoController;
use Illuminate\Support\Facades\Route;

Route::prefix("cat/preco")->name("cat.preco.")->group(function () {
    Route::get("/cadastrar", [CatPrecoController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [CatPrecoController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [CatPrecoController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});