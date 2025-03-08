<?php

use App\Http\Livewire\Destino\Actualizar;
use App\Http\Livewire\Destino\Cadastro;
use App\Http\Livewire\Destino\Lista;
use Illuminate\Support\Facades\Route;

Route::prefix("destino")->name("destino.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});