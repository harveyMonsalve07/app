@extends('layouts.master')

@section('content')
	<h1>Ciudades</h1>
	@include('ciudades.parciales.lista_departamentos')

	<div class="list-group">
		@foreach ($ciudades as $ciudad)
			<a href="{{ route('ciudades.edit', $ciudad->id) }}" class="list-group-item list-group-item-action">
				{{ $ciudad->nombre }} - {{ $ciudad->departamento->nombre }}
			</a>
		@endforeach
	</div>
	<div align="center">{{ $ciudades->links() }}</div>
@endsection