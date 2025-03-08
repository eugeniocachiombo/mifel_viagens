<?php

use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Livewire\PaginaInicial\Index;
use App\Http\Livewire\Usuario\ActualizarDados;
use App\Http\Livewire\Usuario\AlterarSenha;
use App\Http\Livewire\Usuario\Cadastro;
use App\Http\Livewire\Usuario\Login;
use App\Http\Livewire\Usuario\Perfil;
use App\Http\Livewire\Usuario\Sair;
use Illuminate\Support\Facades\Route;

Route::prefix("usuario")->name("usuario.")->group(function () {
    Route::get("/cadastrar", Cadastro::class)->name("cadastrar")->middleware("usuario.terminado");
    Route::get("/logar", Login::class)->name("logar")->middleware("usuario.terminado");
    Route::get("/pagina_inicial", Index::class)->name("pagina_inicial")->middleware("usuario.logado");
    Route::get("/perfil/{id}", Perfil::class)->name("perfil")->middleware("usuario.logado");
    Route::get("/actualizar/dados/{id}", ActualizarDados::class)->name("actualizar.dados")->middleware("usuario.logado");
    Route::get("/alterar/senha", AlterarSenha::class)->name("alterar.senha")->middleware("usuario.logado");
    Route::get("/sair", Sair::class)->name("sair")->middleware("usuario.logado");
});