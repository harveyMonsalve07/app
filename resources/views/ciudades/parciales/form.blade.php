<div class="form-group">
	<label for="nombre">Ciudad:</label>
	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ciudad" required value="{{ old('nombre', $ciudad->nombre) }}" >
</div>
<div class="form-row">
	<div class="form-group col-md-4">
		<label for="departamento">Departamento:</label>

		<select class="form-control" name="departamento_id" id="departamento_id" required>
			<option value=""></option>
			@foreach ($departamentos as $departamento)

				@if (old('departamento_id', $ciudad->departamento_id) == $departamento->id)
				      <option value="{{ $departamento->id }}" selected>
				      	{{ $departamento->nombre }}
				      </option>
				@else
				      <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
				@endif

			@endforeach
		</select>
	</div>

	<div class="form-group col-md-4">
			<label for="codigo_dane">Código DANE:</label>
			<input type="number" class="form-control" placeholder="Código DANE" name="codigo_dane" id="codigo_dane" min="1" max="99999" step="1" required value="{{ old('codigo_dane', $ciudad->codigo_dane) }}">
	</div>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">Grabar</button>
</div>