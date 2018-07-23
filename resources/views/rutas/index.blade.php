@extends('layouts.master')

@section('content')
	<h1>Rutas</h1>
	<hr>

	<div class="list-group">
		@foreach ($rutas as $ruta)
			<a href="{{ route('rutas.edit', $ruta->id) }}" class="list-group-item list-group-item-action">
				{{ $ruta->origen->nombre }} - {{ $ruta->destino->nombre }} 
				@if ($ruta->nombre)
					: {{ $ruta->nombre }}
				@endif
			</a>
		@endforeach
	</div>

	<div align="center">{{ $rutas->links() }}</div>
	
@endsection