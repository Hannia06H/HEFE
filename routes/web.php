<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PersonalController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProveedorController::class)->group(function(){
    Route::get('/proveedores','index')->name('lista');
    Route::post('/registrar_proveedor','store')->name('crear');
    Route::get('/formulario_registroprov','register')->name('registrar');
});
Route::get('/editar_proveedor/{id}', [ProveedorController::class, 'edit'])->name('editar');
Route::put('/actualizar_proveedor/{id}', [ProveedorController::class, 'update'])->name('actualizar');
Route::delete('/confirmar/{id}', [ProveedorController::class, 'destroy'])->name('borrar');
Route::get('/eliminar_proveedor/{id}', [ProveedorController::class, 'most'])->name('mostrar');

Route::controller(PersonalController::class)->group(function(){
    Route::get('/personal','index')->name('lista_personal');
    Route::post('/registrar_personal','store')->name('crear_personal');
    Route::get('/formulario_registroperso','register')->name('registrar_personal');
});

//Route::get('/dias_personal/{id}', [PersonalController::class, 'find'])->name('dias');
Route::get('/editar_personal/{id}', [PersonalController::class, 'edit'])->name('editar_personal');
Route::put('/actualizar_personal/{id}', [PersonalController::class, 'update'])->name('actualizar_personal');
Route::delete('/confirmar_b/{id}', [PersonalController::class, 'destroy'])->name('borrar_personal');
Route::get('/eliminar_personal/{id}', [PersonalController::class, 'most'])->name('mostrar_personal');

