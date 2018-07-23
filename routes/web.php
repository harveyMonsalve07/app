<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resources([
	'clientes' => 'ClientesController',
	'personas' => 'PersonasController',
	'ciudades' => 'CiudadesController',
	'bancos' => 'BancosController',
	'rutas' => 'RutasController',
	'puestos_de_control' => 'PuestosDeControlController',
	'conductores' => 'ConductoresController',
	'propietarios' => 'PropietariosController',
	'vehiculos' => 'VehiculosController',
	'ciudades' => 'CiudadesController',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
