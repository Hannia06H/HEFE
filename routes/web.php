<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

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

