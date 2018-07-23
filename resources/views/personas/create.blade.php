@extends('layouts.master')

@section('content')
	<h1>Crear Persona</h1>
	<hr>
	@include('layouts.errors')
	<form method="POST" action="{{ route('personas.store') }}">
		@csrf
		@include('personas.form', ['persona' => new \App\Persona])

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Grabar</button>
		</div>
	</form>

	
@endsection