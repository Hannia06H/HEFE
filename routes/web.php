<?php

use Illuminate\Support\Facades\Route;
Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Route::get('/vender', function () {
    return view('vender');
});
Route::get('/inv', function () {
    return view('inventario');
});
Route::get('/servdom', function () {
    return view('servdom');
});
