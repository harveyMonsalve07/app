@extends('layouts.master')

@section('content')
	<h1>Crear Propietario</h1>
	<hr>
	@include('layouts.errors')
	<hr>

	<form method="POST" action="{{ route('propietarios.store') }}">
		@csrf
		@include('propietarios.form')
	</form>

@endsection