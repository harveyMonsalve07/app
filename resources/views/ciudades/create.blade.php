@extends('layouts.master')

@section('content')
	<h1>Crear Ciudad</h1>
	<hr>
	<form method="POST" action="{{ route('ciudades.store') }}">
		@csrf
		@include('ciudades.parciales.form')
	</form>

	@include('layouts.errors')
@endsection

@section('title')
	- Crear Ciudad
@endsection