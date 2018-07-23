
<div class="form-group">
	<label for="nombre">Nombre:</label>
	<input type="text" class="form-control form-control-sm" name="nombre" id="nombre" value="{{ old('nombre',  $ruta->nombre) }}">
</div>

<div class="form-row">
	<div class="form-group col-md-4">
		<label for="ciudad">Origen:</label>
		@include('layouts.select_ciudades', [
			'nombre_var' => 'ciudad_origen',
			'var_inicial' => $ruta->origen_id
			])
	</div>
	<div class="form-group col-md-4">
		<label for="ciudad">Destino:</label>
		@include('layouts.select_ciudades', [
			'nombre_var' => 'ciudad_destino',
			'var_inicial' => $ruta->destino_id 
			])
	</div>

	<div class="form-group col-md-4">
		<label for="duracion_recorrido">Duración de Recorrido (Horas):</label>
		<input type="text" class="form-control form-control-sm" name="duracion_recorrido" id="duracion_recorrido" value="{{ old('duracion_recorrido',  $ruta->duracion_recorrido) }}">
	</div>
</div>

<div class="form-group">
	<label for="observaciones">Observaciones:</label>
	<textarea class="form-control" name="observaciones">{{ old('observaciones', $ruta->observaciones) }}</textarea>

</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">Grabar</button>
</div>