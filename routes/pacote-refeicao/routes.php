<?php

use App\Http\Controllers\PacoteRefeicao\PacoteRefeicaocontroller;
use Illuminate\Support\Facades\Route;


Route::prefix("pacote/refeicao")->name("pacote.refeicao.")->group(function () {
    Route::get("/cadastrar", [PacoteRefeicaocontroller::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [PacoteRefeicaocontroller::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [PacoteRefeicaocontroller::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});