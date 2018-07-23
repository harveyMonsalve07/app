@extends('layouts.master')

@section('content')
	<h1>Crear Ruta</h1>
	<hr>
	@include('layouts.errors')
	<form action="{{ route('rutas.store') }}" method="POST">
		@csrf
		@include('rutas.form')

	</form>
@endsection