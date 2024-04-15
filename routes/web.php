<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaducidadController;
use App\Http\Controllers\StockAlertController;
use App\Http\Controllers\InformeDevolucionesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/alerta', [CaducidadController::class, 'mostrarAlerta']);
Route::get('/stock', [StockAlertController::class, 'mostrarAlertaStock']);
Route::get('/informe-devolucion', [InformeDevolucionesController::class, 'index'])->name('informe.devoluciones');
Route::post('/agregar-devolucion', [InformeDevolucionesController::class, 'agregar'])->name('agregar.devolucion');
Route::get('/informe-devoluciones', [InformeDevolucionesController::class, 'mostrarInforme'])->name('informe.dev');
