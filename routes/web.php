<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaducidadController;
use App\Http\Controllers\StockAlertController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/alerta', [CaducidadController::class, 'mostrarAlerta']);
Route::get('/stock', [StockAlertController::class, 'mostrarAlertaStock']);