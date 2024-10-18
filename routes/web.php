<?php

use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("usuario.logar");
});

Route::prefix("usuario")->name("usuario.")->group(function () {
    Route::get("/cadastrar", [UsuarioController::class, "cadastrar"])->name("cadastrar");
    Route::get("/logar", [UsuarioController::class, "logar"])->name("logar");
});

