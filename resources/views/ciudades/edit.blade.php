@extends('layouts.master')

@section('content')
	<h1>
		Editar Ciudad
	</h1>
	<hr>
	<form method="POST" action="{{ route('ciudades.update', $ciudad->id) }}">
		@csrf
		@method('PATCH')
	
		@include('ciudades.parciales.form')

	</form>

	@include('layouts.errors')
@endsection

@section('title')
	- Editar Ciudad
@endsection