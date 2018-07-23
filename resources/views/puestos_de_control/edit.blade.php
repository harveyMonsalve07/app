@extends('layouts.master')

@section('content')
	<h1>Editar Puesto de Control</h1>
	<hr>
	<form action="{{ route('puestos_de_control.update', $ruta->id) }}" method="POST">
		@method('PATCH')
		@include('puestos_de_control.form')
	</form>
@endsection