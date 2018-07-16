@extends('layouts.master')

@section('content')
	<h1>Crear Cliente</h1>
	<hr>
	@include('layouts.errors')
	<hr>

	<form method="POST" action="{{ route('clientes.store') }}">
		@csrf
		@include('clientes.form')
	</form>

@endsection