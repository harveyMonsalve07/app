@extends('layouts.master')

@section('content')
	<h1>Hello World!</h1>
	<hr>
	
	
	@include('personas.form', [
		'persona' => new \App\Persona
		])
@endsection