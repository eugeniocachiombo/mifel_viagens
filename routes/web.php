<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pagina_inicial.index');
});

Route::get('/login', function () {
    return view('usuario.login');
});



