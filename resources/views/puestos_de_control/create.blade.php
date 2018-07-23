@extends('layouts.master')

@section('content')
	<h1>Crear Puesto de Control</h1>
	<hr>
	<form action="{{ route('puestos_de_control.store') }}" method="POST">
		@include('puestos_de_control.form')
	</form>
@endsection