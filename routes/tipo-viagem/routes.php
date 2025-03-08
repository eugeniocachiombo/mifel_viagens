<?php

use App\Http\Livewire\TipoViagem\Actualizar;
use App\Http\Livewire\TipoViagem\Cadastro;
use App\Http\Livewire\TipoViagem\Lista;
use Illuminate\Support\Facades\Route;

Route::prefix("tipo/viagem")->name("tipo.viagem.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});