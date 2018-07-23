@extends('layouts.master')

@section('content')
	<h1>Clientes</h1>
	<hr>

	<div class="list-group">
		@foreach ($clientes as $cliente)
			<a href="{{ route('clientes.edit', $cliente->id) }}" class="list-group-item list-group-item-action">
				{{ $cliente->persona->nombre }}
			</a>
		@endforeach
	</div>

	<div align="center">{{ $clientes->links() }}</div>
	
@endsection