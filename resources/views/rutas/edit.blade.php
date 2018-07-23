@extends('layouts.master')

@section('content')
	<h1>Editar Ruta</h1>
	<hr>
	@include('layouts.errors')
	<form action="{{ route('rutas.update', $ruta->id) }}" method="POST">
		@csrf
		@method('PATCH')
		@include('rutas.form')

	</form>
@endsection