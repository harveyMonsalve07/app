
@include('layouts.errors')

@csrf
<div class="form-group">
	<label for="nombre">Nombre:</label>
	<input type="text" class="form-control form-control-sm" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre', $puesto_de_control->nombre) }}" >
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="ciudad">Ciudad:</label>
			@include('layouts.select_ciudades', [
				'nombre_var' => 'ciudad',
				'var_inicial' =>  $puesto_de_control->ciudad_id 
				])
	</div>
	<div class="form-group col-md-6">
		<div class="form-group">
			<label for="operario">Operario:</label>
			<input type="text" class="form-control form-control-sm" name="operario" id="operario" placeholder="Operario" value="{{ old('operario', $puesto_de_control->operario) }}" >
		</div>
	</div>

</div>

<div class="form-row">
	<div class="form-group col-md-4">
		<div class="form-group">
			<label for="email">email:</label>
			<input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="email" value="{{ old('email', $puesto_de_control->email) }}" >
		</div>
	</div>
	<div class="form-group col-md-4">
		<div class="form-group">
			<label for="telefono">Teléfono:</label>
			<input type="text" class="form-control form-control-sm" name="telefono" id="telefono" placeholder="telefono" value="{{ old('telefono', $puesto_de_control->telefono) }}" >
		</div>
	</div>
	<div class="form-group col-md-4">
		<div class="form-group">
			<label for="movil">Móvil:</label>
			<input type="text" class="form-control form-control-sm" name="movil" id="movil" placeholder="Móvil" value="{{ old('movil', $puesto_de_control->movil) }}" >
		</div>
	</div>
</div>

<div class="form-group">
	<label for="observaciones">Obervaciones:</label>
	<textarea name="observaciones" class="form-control">{{ old('observaciones', $puesto_de_control->observaciones) }}</textarea>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">Grabar</button>
</div>