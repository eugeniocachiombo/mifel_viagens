<?php

use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Livewire\PaginaInicial\Index;
use App\Http\Livewire\Usuario\Cadastro;
use App\Http\Livewire\Usuario\Login;
use Illuminate\Support\Facades\Route;

Route::prefix("usuario")->name("usuario.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.terminado");
    Route::get("/logar", Login::class)->name("logar")->middleware("usuario.terminado");
    Route::get("/pagina_inicial", Index::class)->name("pagina_inicial")->middleware("usuario.logado");
    Route::get("/perfil/{id}", [UsuarioController::class, "irEmPerfil"])->name("perfil")->middleware("usuario.logado");
    Route::get("/actualizar/dados/{id}", [UsuarioController::class, "actualizarDados"])->name("actualizar.dados")->middleware("usuario.logado");
    Route::get("/alterar/senha", [UsuarioController::class, "alterarSenha"])->name("alterar.senha")->middleware("usuario.logado");
    Route::get("/sair", [UsuarioController::class, "sair"])->name("sair")->middleware("usuario.logado");
});