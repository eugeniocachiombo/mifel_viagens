<?php

use App\Http\Livewire\Viagem\Actualizar;
use App\Http\Livewire\Viagem\Cadastro;
use App\Http\Livewire\Viagem\Lista;
use Illuminate\Support\Facades\Route;

Route::prefix("viagem")->name("viagem.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});