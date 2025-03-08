<?php

use App\Http\Livewire\PacoteRefeicao\Cadastro;
use App\Http\Livewire\PacoteRefeicao\Lista;
use App\Http\Livewire\PacoteRefeicao\Actualizar;
use Illuminate\Support\Facades\Route;


Route::prefix("pacote/refeicao")->name("pacote.refeicao.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});