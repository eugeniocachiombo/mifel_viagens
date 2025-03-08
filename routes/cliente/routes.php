<?php

use App\Http\Livewire\Cliente\Lista;
use Illuminate\Support\Facades\Route;

Route::prefix("cliente")->name("cliente.")->group(function () {
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
});