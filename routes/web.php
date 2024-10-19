<?php

use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Destino\DestinoController;
use App\Http\Controllers\DificuldadeViagem\DificuldadeViagemController;
use App\Http\Controllers\TipoViagem\TipoViagemController;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Viagem\ViagemController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("usuario.logar");
});

Route::prefix("usuario")->name("usuario.")->group(function () {
    Route::get("/cadastrar", [UsuarioController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.terminado");
    Route::get("/logar", [UsuarioController::class, "logar"])->name("logar")->middleware("usuario.terminado");
    Route::get("/pagina_inicial", [UsuarioController::class, "irEmInicio"])->name("pagina_inicial")->middleware("usuario.logado");
    Route::get("/perfil/{id}", [UsuarioController::class, "irEmPerfil"])->name("perfil")->middleware("usuario.logado");
    Route::get("/actualizar/dados/{id}", [UsuarioController::class, "actualizarDados"])->name("actualizar.dados")->middleware("usuario.logado");
    Route::get("/alterar/senha", [UsuarioController::class, "alterarSenha"])->name("alterar.senha")->middleware("usuario.logado");
    Route::get("/sair", [UsuarioController::class, "sair"])->name("sair")->middleware("usuario.logado");
});

Route::prefix("destino")->name("destino.")->group(function () {
    Route::get("/cadastrar", [DestinoController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [DestinoController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [DestinoController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});

Route::prefix("tipo/viagem")->name("tipo.viagem.")->group(function () {
    Route::get("/cadastrar", [TipoViagemController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [TipoViagemController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [TipoViagemController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});

Route::prefix("dificuldade/viagem")->name("dificuldade.viagem.")->group(function () {
    Route::get("/cadastrar", [DificuldadeViagemController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [DificuldadeViagemController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [DificuldadeViagemController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});

Route::prefix("viagem")->name("viagem.")->group(function () {
    Route::get("/cadastrar", [ViagemController::class, "cadastrar"])->name("cadastrar")->middleware("usuario.logado");
    Route::get("/lista", [ViagemController::class, "listar"])->name("lista")->middleware("usuario.logado");
    Route::get("/actualizar/{id}", [ViagemController::class, "actualizar"])->name("actualizar")->middleware("usuario.logado");
});

Route::prefix("cliente")->name("cliente.")->group(function () {
    Route::get("/lista", [ClienteController::class, "listar"])->name("lista")->middleware("usuario.logado");
});

Route::get("/migrate", function(){
    Artisan::call("migrate");
    return "Informações migradas";
});

Route::get("/drop", function () {
    DB::statement('SET FOREIGN_KEY_CHECKS=0');
    Artisan::call('migrate:reset');
    DB::statement('DROP TABLE IF EXISTS migrations');
    DB::statement('SET FOREIGN_KEY_CHECKS=1');
    return "Base de dados limpeza total";
});