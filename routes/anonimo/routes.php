<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaInicial\AnonimoController;

Route::get("/", [AnonimoController::class, "irEmInicio"])->name("anonimo")->middleware("usuario.terminado");