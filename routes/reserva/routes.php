<?php

use App\Http\Livewire\Reserva\Actualizar;
use App\Http\Livewire\Reserva\Lista;
use App\Http\Livewire\Reserva\Reservar;
use Illuminate\Support\Facades\Route;


Route::prefix("reserva")->name("reserva.")->group(function () {
    Route::get("/reservar", Reservar::class)->name("reservar");
    Route::get("/lista", Lista::class)->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", Actualizar::class)->name("actualizar")->middleware("usuario.logado");
});