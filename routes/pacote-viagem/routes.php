<?php

use App\Http\Livewire\PacoteViagem\Cadastro;
use App\Http\Livewire\PacoteViagem\Lista;
use App\Http\Livewire\PacoteViagem\Actualizar;
use Illuminate\Support\Facades\Route;

Route::prefix("pacote/viagem")->name("pacote.viagem.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});