@extends('layouts.master')

@section('content')
	<h4 class="mb-3">Modificar Propietario</h4>
	<form action="/propietarios/{{$propietario->id}}" method="POST">
		@include('propietarios.form')
		@method('PATCH')
	</form>
@endsection