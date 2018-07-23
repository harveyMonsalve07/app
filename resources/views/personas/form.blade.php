
<div class="form-row">
	<div class="form-group col-md-4">
		<label for="documento_tipo">Tipo de Documento:</label>

		<select class="form-control form-control-sm" name="documento_tipo" id="documento_tipo" required onchange="seleccionForm()">
			<option value=""></option>

			@foreach ($documento_tipos as $documento_tipo)

				@if (old('documento_tipo', $persona->documento_tipo_id) == $documento_tipo->id)
					<option value="{{ $documento_tipo->id }}" selected>
						{{ $documento_tipo->tipo }}
					</option>
				@else
					<option value="{{ $documento_tipo->id }}">
						{{ $documento_tipo->tipo }}
					</option>
				@endif

			@endforeach
		</select>
	</div>
	<div class="form-group col-md-4">
		<label for="numero_identificacion">Número:</label>
		<input type="number" class="form-control form-control-sm" name="numero_identificacion" id="numero_identificacion"  required value="{{ old('numero_identificacion', $persona->numero_identificacion) }}">
	</div>
	<div class="form-group col-md-4">
		<label for="documento_ciudad">Ciudad Expedición:</label>
		@include('layouts.select_ciudades', [
			'nombre_var' => 'documento_ciudad',
			'var_inicial' =>  $persona->documento_ciudad_id 
			])
	</div>
</div>


<div id="personaJuridica" style="display: none;">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control form-control-sm" name="nombre" id="nombre" value="{{ old('nombre', $persona->nombre) }}">
	</div>
</div>

<div id="personaNatural" style="display: none;">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="primer_nombre">Primer Nombre:</label>
			<input type="text" class="form-control form-control-sm" name="primer_nombre" id="primer_nombre" value="{{ old('primer_nombre', $persona->primer_nombre) }}">
		</div>

		<div class="form-group col-md-6">
			<label for="segundo_nombre">Segundo Nombre:</label>
			<input type="text" class="form-control form-control-sm" name="segundo_nombre" id="segundo_nombre" value="{{ old('segundo_nombre', $persona->segundo_nombre) }}">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="primer_apellido">Primer Apellido:</label>
			<input type="text" class="form-control form-control-sm" name="primer_apellido" id="primer_apellido" value="{{ old('primer_apellido', $persona->primer_apellido) }}">
		</div>

		<div class="form-group col-md-6">
			<label for="segundo_apellido">Segundo Apellido:</label>
			<input type="text" class="form-control form-control-sm" name="segundo_apellido" id="segundo_apellido" value="{{ old('segundo_apellido', $persona->segundo_apellido) }}">
		</div>
	</div>
</div>

<div class="form-group">
	<label for="ciudad">Ciudad:</label>
		@include('layouts.select_ciudades', [
			'nombre_var' => 'ciudad',
			'var_inicial' =>  $persona->ciudad_id 
			])
</div>


<div class="form-group">
	<label for="direccion">Dirección:</label>
	<input type="text" class="form-control form-control-sm" name="direccion" id="direccion" required value="{{ old('direccion', $persona->direccion) }}">
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="telefono">Teléfono:</label>
		<input type="number" class="form-control form-control-sm" name="telefono" id="telefono" maxlength="10" minlength="7" step="1" value="{{ old('telefono', $persona->telefono) }}">
	</div>
	<div class="form-group col-md-6">
		<label for="email">Email:</label>
		<input type="email" class="form-control form-control-sm" name="email" id="email" value="{{ old('email', $persona->email) }}">
	</div>
</div>

@section('jsScripts')
	<script>

	
	function generaForm() {
		var personaJuridica = document.getElementById("personaJuridica");
		var personaNatural = document.getElementById("personaNatural");
		var documentoTipo = document.getElementById("documento_tipo").value;

		
		if ( documentoTipo == "") {
			//Oculta ambos formularios
			personaJuridica.style.display = "none";
			personaNatural.style.display = "none";
			//Adiciona requerimiento para que seleccione un tipo de documento
			document.getElementById("primer_nombre").required = true;
			document.getElementById("primer_apellido").required = true;
			document.getElementById("segundo_apellido").required = true;
			document.getElementById("nombre").required = true;
		}		
		else if (documentoTipo == 2) {
			personaJuridica.style.display = "block";
			personaNatural.style.display = "none";
			document.getElementById("primer_nombre").required = false;
			document.getElementById("primer_apellido").required = false;
			document.getElementById("segundo_apellido").required = false;
			document.getElementById("nombre").required = true;
		}
		else {
			personaJuridica.style.display = "none";
			personaNatural.style.display = "block";
			document.getElementById("primer_nombre").required = true;
			document.getElementById("primer_apellido").required = true;
			document.getElementById("segundo_apellido").required = true;
			document.getElementById("nombre").required = false;
		}
	}

	window.onload = function() {
		generaForm();
	};


	function seleccionForm() {
		generaForm();
	}
	</script>
@endsection