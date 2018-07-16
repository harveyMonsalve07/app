<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('ciudades', 'CiudadesController');
Route::resource('personas', 'PersonasController');
Route::resource('clientes', 'ClientesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
