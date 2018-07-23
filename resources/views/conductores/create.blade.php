@extends('layouts.master')

@section('content')
	<h1>Crear Conductor</h1>
	<hr>
	@include('layouts.errors')
	<hr>

	<form method="POST" action="{{ route('conductores.store') }}">
		@csrf
		@include('conductores.form')
	</form>
	@include('layouts.errors')
@endsection