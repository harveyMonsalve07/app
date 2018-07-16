@extends('layouts.master')

@section('content')
	<h1>Editar Persona</h1>
	<hr>
	<form method="POST" action="{{ route('personas.update', $persona->id) }}">
		@csrf
		@method('PATCH')
		
		@include('personas.form')

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Grabar</button>
		</div>
	</form>

	@include('layouts.errors')
@endsection
