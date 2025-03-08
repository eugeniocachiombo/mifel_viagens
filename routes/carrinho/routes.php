<?php

use App\Http\Livewire\Carrinho\Confirmar;
use Illuminate\Support\Facades\Route;

Route::prefix("carrinho")->name("carrinho.")->group(function () {
    Route::get("/confirmar", Confirmar::class)->name("confirmar")->middleware("usuario.logado");
});