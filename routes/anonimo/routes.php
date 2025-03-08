<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PaginaInicial\Anonimo;

Route::get("/", Anonimo::class)->name("anonimo")->middleware("usuario.terminado");