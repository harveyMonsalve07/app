@extends('layouts.master')

@section('content')
	<h1>
		Crear Banco
	</h1>
	<hr>
	
	@include('layouts.errors')
	<form method="POST" action="{{ route('bancos.store') }}">
		@csrf
	
		@include('bancos.form')
	</form>
@endsection