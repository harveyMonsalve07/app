@extends('layouts.master')

@section('titulo_pagina', 'Propietarios')

@section('content')
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4"></div>
		<div class="col-4"><a href="/propietarios/create" class="btn btn-primary">Nuevo</a></div>
	</div>
	<ul class="list-group">
		@foreach($propietarios as $propietario)
			<li class="list-group-item"><a href="/propietarios/{{$propietario->id}}/edit">{{ $propietario->titular_cuenta_banco }}</a></li>
		@endforeach
	</ul>
@endsection