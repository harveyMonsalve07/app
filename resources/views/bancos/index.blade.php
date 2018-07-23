@extends('layouts.master')

@section('content')
	<h1>Bancos</h1>
	<div class="list-group">
		@foreach ($bancos as $banco)
			<a href="{{ route('bancos.edit', $banco->id) }}" class="list-group-item list-group-item-action">
				{{ $banco->nombre }}
			</a>
		@endforeach
	</div>
	<div align="center">{{ $bancos->links() }}</div>
@endsection