<select class="form-control form-control-sm" name="{{ $nombre_var }}" id="{{ $nombre_var }}" required>
	<option value=""></option>
	@foreach ($ciudades as $ciudad)

		@if (old( $nombre_var, $var_inicial) == $ciudad->id)
			<option value="{{ $ciudad->id }}" selected>
				{{ $ciudad->nombre }} - {{ $ciudad->departamento->nombre }}
			</option>
		@else
			<option value="{{ $ciudad->id }}">
				{{ $ciudad->nombre }} - {{ $ciudad->departamento->nombre }}
			</option>
		@endif
	@endforeach
</select>