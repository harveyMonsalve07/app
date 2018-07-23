@extends('layouts.master')

@section('content')
	<h1>Crear Vehiculo</h1>
	<hr>
	@include('layouts.errors')
	<hr>

	<form method="POST" action="{{ route('vehiculos.store') }}">
		@csrf
		@include('vehiculos.form')
	</form>

@endsection