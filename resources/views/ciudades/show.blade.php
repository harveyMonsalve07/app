@extends('layouts.master')

@section('content')
	<div class="list-group">
		@foreach ($ciudades as $ciudad)
			<a href="{{ route('ciudades.edit', $ciudad->id) }}" class="list-group-item list-group-item-action">
				{{ $ciudad->nombre }} - {{ $ciudad->departamento->nombre }}
			</a>
		@endforeach
	</div>
@endsection