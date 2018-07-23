@extends('layouts.master')

@section('titulo_pagina', 'Vehículos')

@section('content')
	<div class="row">
		<div class="col-10"></div>
		<div class="col-2"><a href="/vehiculos/create" class="btn btn-primary">Nuevo</a></div>
	</div>
	<ul class="list-group">
		@foreach($vehiculos as $vehiculo)
			<li class="list-group-item">
				<a href="/vehiculos/{{$vehiculo->id}}/edit">
				{{ $vehiculo->placa }}
				{{ '-' }}
				{{ $vehiculo->VehiculoMarca->nombre }}
				{{ '-' }}
				{{ $vehiculo->VehiculoCarroceria->nombre }}
				</a>
			</li>
		@endforeach
	</ul>
@endsection