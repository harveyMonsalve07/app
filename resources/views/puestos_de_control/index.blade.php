{{-- @extends('layouts.indexes', [
	'titulo' => 'Puestos de Control',
	'items' => $puestos_de_control,
	'ruta' => 'puestos_de_control',
	'lineas' => [
		'ciudad',
		'nombre'
	]
])

@php
	function metodos($var, $metodos) {
		@foreach ($metodos as $key => $metodo)
			@if (is_array($metodo))
				return metodos($var->$key, $metodo);
			@else

			@endif

		@endforeach
	}
@endphp
	 --}}
@extends('layouts.master')
	@section('content')
		<h1>Puestos de Control</h1>
		<hr>

		<div class="list-group">
			@foreach ($puestos_de_control as $puesto_de_control)
				<a href="{{ route('puestos_de_control.edit', $puesto_de_control->id) }}" class="list-group-item list-group-item-action">
					{{ $puesto_de_control->ciudad->nombre }} 
					@if ($puesto_de_control->nombre)
						: {{ $puesto_de_control->nombre }}
					@endif
				</a>
			@endforeach
		</div>

		<div align="center">{{ $puestos_de_control->links() }}</div>
	@endsection 
@section('titulo')
	Puestos de Control
@endsection