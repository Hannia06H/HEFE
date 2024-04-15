<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\CaducidadController;
use App\Http\Controllers\StockAlertController;
use App\Http\Controllers\InformeDevolucionesController;
=======
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PersonalController;
>>>>>>> 5f4aaec165abfac30c86cda1ff284dc56e1e2450
=======
use App\Http\Controllers\EmpleadoController;

Auth::routes();
>>>>>>> origin/main

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/alerta', [CaducidadController::class, 'mostrarAlerta']);
Route::get('/stock', [StockAlertController::class, 'mostrarAlertaStock']);
Route::get('/informe-devolucion', [InformeDevolucionesController::class, 'index'])->name('informe.devoluciones');
Route::post('/agregar-devolucion', [InformeDevolucionesController::class, 'agregar'])->name('agregar.devolucion');
Route::get('/informe-devoluciones', [InformeDevolucionesController::class, 'mostrarInforme'])->name('informe.dev');
=======

<<<<<<< HEAD
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
=======
Route::get('/vender', function () {
    return view('vender');
});


Route::put('/inv/{id}', [EmpleadoController::class, 'modProduc'])->name('modProduc');
Route::put('/mostdom/{id}', [EmpleadoController::class, 'modDom'])->name('modDom');
Route::put('/mostProv/{id}', [EmpleadoController::class, 'modProv'])->name('modProv');

Route::controller(EmpleadoController::class, )->group(function () {
    Route::get('/insert', 'upload');
    Route::post('/insert_product', 'save')->name('guardar');
    Route::get('/inv', 'edit')->name('inv'); 
    Route::get('/inv/{id}', 'editProduc')->name('editProduc');
    Route::delete('/eliminar/{id}', 'eliminarRegistro')->name('eliminar.registro');

    Route::get('/servdom', 'servdom');
    Route::post('/insert_dom', 'saveDom')->name('guardarDom');
    Route::get('/mostdom/{id}', 'editDom')->name('editDom');
    Route::get('/mostdom', 'allDom')->name('mostdom'); 
    Route::delete('/eliminardom/{id}', 'eliminarDomicilio')->name('eliminar.domicilio');
    
    Route::get('/proveedores', 'prov');
    Route::post('/insert_dom', 'saveProv')->name('guardarProv');
    Route::get('/mostprov', 'allProv')->name('mostprov'); 
    Route::get('/mostdom/{id}', 'editProv')->name('editProv');


    

});
>>>>>>> origin/main

>>>>>>> origin/main
