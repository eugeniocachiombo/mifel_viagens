<?php

use Illuminate\Support\Facades\Route;

Route::get('/download/{cod_reserva}',  function ($cod_reserva) {
    $path = public_path("pdfs/comprovativo_reserva_$cod_reserva.pdf");
    return response()->download($path);
});