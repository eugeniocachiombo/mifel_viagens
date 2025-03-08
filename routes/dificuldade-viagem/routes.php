<?php

use App\Http\Livewire\DificuldadeViagem\Actualizar;
use App\Http\Livewire\DificuldadeViagem\Cadastro;
use App\Http\Livewire\DificuldadeViagem\Lista;
use Illuminate\Support\Facades\Route;

Route::prefix("dificuldade/viagem")->name("dificuldade.viagem.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});