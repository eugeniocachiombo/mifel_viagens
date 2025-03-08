<?php

use App\Http\Controllers\PacoteHospedagem\PacoteHospedagemcontroller;
use Illuminate\Support\Facades\Route;

Route::prefix("pacote/hospedagem")->name("pacote.hospedagem.")->group(function () {
    Route::get("/cadastrar", [PacoteHospedagemcontroller::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [PacoteHospedagemcontroller::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [PacoteHospedagemcontroller::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});