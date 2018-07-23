@extends('layouts.master')

@section('content')
	<h1>{{ $titulo }}</h1>
	<hr>

	<div class="list-group">
		@foreach ($items as $item)
			<a href="{{ route($ruta.'.edit', $item->id) }}" class="list-group-item list-group-item-action">
				@foreach ($array as $element)
					{{-- expr --}}
				@endforeach
				{{ $item->$lleno }}
			</a>
		@endforeach
	</div>

	<div align="center">{{ $items->links() }}</div>
	
@endsection