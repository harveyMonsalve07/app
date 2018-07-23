@extends('layouts.master')

@section('content')
	<h1>Editar Cliente</h1>
	<hr>
	@include('layouts.errors')
	<hr>

	<form method="POST" action="{{ route('clientes.store') }}">
		@csrf
		@METHOD('PATCH')
		
		@include('clientes.form')
	</form>

@endsection