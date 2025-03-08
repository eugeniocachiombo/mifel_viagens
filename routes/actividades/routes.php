<?php

use App\Http\Livewire\Actividades\Actualizar;
use App\Http\Livewire\Actividades\Cadastro;
use App\Http\Livewire\Actividades\Lista;
use Illuminate\Support\Facades\Route;

Route::prefix("actividades")->name("actividades.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});