@extends('layouts.master')

@section('content')
	<h1>Clientes</h1>
	<hr>

	<div class="list-group">
		@foreach ($clientes as $cliente)
			<a href="{{ route('clientes.edit', $cliente->id) }}" class="list-group-item list-group-item-action">
				{{ $cliente->nombre }} - {{ $cliente->departamento->nombre }}
			</a>
		@endforeach
	</div>
	
@endsection