@extends('layouts.master')

@section('titulo_pagina', 'Conductores')

@section('content')
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4"></div>
		<div class="col-4"><a href="/conductores/create" class="btn btn-primary">Nuevo</a></div>
	</div>
	<ul class="list-group">
		@foreach($conductores as $conductor)
			<li class="list-group-item"><a href="/conductores/{{$propietario->id}}/edit">
				{{ $conductor->licencia }}</a></li>
		@endforeach
	</ul>
@endsection