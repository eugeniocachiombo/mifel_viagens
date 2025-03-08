<?php

use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::prefix("usuario")->name("usuario.")->group(function () {
    Route::get("/cadastrar", [UsuarioController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.terminado");
    Route::get("/logar", [UsuarioController::class, "logar"])->name("logar")->middleware("usuario.terminado");
    Route::get("/pagina_inicial", [UsuarioController::class, "irEmInicio"])->name("pagina_inicial")->middleware("usuario.logado");
    Route::get("/perfil/{id}", [UsuarioController::class, "irEmPerfil"])->name("perfil")->middleware("usuario.logado");
    Route::get("/actualizar/dados/{id}", [UsuarioController::class, "actualizarDados"])->name("actualizar.dados")->middleware("usuario.logado");
    Route::get("/alterar/senha", [UsuarioController::class, "alterarSenha"])->name("alterar.senha")->middleware("usuario.logado");
    Route::get("/sair", [UsuarioController::class, "sair"])->name("sair")->middleware("usuario.logado");
});