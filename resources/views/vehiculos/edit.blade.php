@extends('layouts.master')

@section('content')
	<h4 class="mb-3">Modificar Vehiculo</h4>
	<form action="/vehiculos/{{$vehiculo->id}}" method="POST">
		@include('vehiculos.form')
		@method('PATCH')
	</form>
@endsection