<?php

use App\Http\Controllers\Destino\DestinoController;
use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("usuario.logar");
});

Route::prefix("usuario")->name("usuario.")->group(function () {
    Route::get("/cadastrar", [UsuarioController::class, "cadastrar"])->name("cadastrar");
    Route::get("/logar", [UsuarioController::class, "logar"])->name("logar");
    Route::get("/pagina_inicial", [UsuarioController::class, "irEmInicio"])->name("pagina_inicial");
});

Route::prefix("destino")->name("destino.")->group(function () {
    Route::get("/cadastrar", [DestinoController::class, "cadastrar"])->name("cadastrar");
    Route::get("/lista", [DestinoController::class, "listar"])->name("lista");
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