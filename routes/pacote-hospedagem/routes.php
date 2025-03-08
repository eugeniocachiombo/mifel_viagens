<?php

use App\Http\Livewire\PacoteHospedagem\Cadastro;
use App\Http\Livewire\PacoteHospedagem\Lista;
use App\Http\Livewire\PacoteHospedagem\Actualizar;
use Illuminate\Support\Facades\Route;

Route::prefix("pacote/hospedagem")->name("pacote.hospedagem.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});