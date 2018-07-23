<div class="form-group">
	<label for="nombre">Nombre:</label>
	<input type="text" class="form-control form-control-sm" name="nombre" id="nombre" required value="{{ old('nombre', $banco->nombre) }}">
</div>

<div class="form-row">
	<div class="form-group col-md-4">
		<label for="cheque">Cheque:</label>
		<input type="text" class="form-control form-control-sm" name="cheque" id="cheque" value="{{ old('cheque', $banco->cheque) }}">
	</div>

	<div class="form-group col-md-4">
		<label for="ciudad">Ciudad:</label>
		@include('layouts.select_ciudades', [
			'nombre_var' => 'ciudad',
			'var_inicial' =>  $banco->ciudad_id
		])
	</div>

	<div class="form-group col-md-4">
		<label for="cuenta">Cuenta:</label>
		<input type="text" class="form-control form-control-sm" name="cuenta" id="cuenta" value="{{ old('cuenta', $banco->cuenta) }}">
	</div>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary">Grabar</button>
</div>