<?php

use App\Http\Livewire\CatPreco\Actualizar;
use App\Http\Livewire\CatPreco\Cadastro;
use App\Http\Livewire\CatPreco\Lista;
use Illuminate\Support\Facades\Route;

Route::prefix("cat/preco")->name("cat.preco.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});