<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/transacoes', function () {
    return response()->json([
        'status' => 'API funcionando corretamente!',
        'data' => [],
    ]);
});
