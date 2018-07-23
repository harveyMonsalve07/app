@csrf
<div class="row">
	<div class="col-md-6 mb-3">
		<label for="placa">Placa</label>
		<input type="text" class="form-control" name="placa" id="placa" value="{{ old('placa', $vehiculo->placa ) }}" required>
	</div>
	<div class="col-md-6 mb-3">
		<label for="vehiculo_servicio_id">Servicio</label>
		<select name="vehiculo_servicio_id" id="vehiculo_servicio_id" class="form-control">
			<option value="">--Seleccione Servicio--</option>
			@foreach($servicios as $servicio)
				<option value="{{ $servicio->id }}"
					@if(!is_null(old('vehiculo_servicio_id')))
						{{ 'selected' }}
					@elseif($servicio->id == $vehiculo->vehiculo_servicio_id)
						{{ 'selected' }}
					@endif
				>{{ $servicio->nombre }}</option>
			@endforeach
		</select>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="matricula">matricula</label>
		<input type="text" class="form-control" name="matricula" id="matricula" value="{{ old('matricula', $vehiculo->matricula ) }}" required>
	</div>
	<div class="col-md-6 mb-3">
		<label for="fecha_matricula">Fecha matricula</label>
		<input type="text" class="form-control" name="fecha_matricula" id="fecha_matricula" value="{{ old('fecha_matricula', $vehiculo->fecha_matricula ) }}" required>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="vehiculo_marca_id">Marca</label>
		<select name="vehiculo_marca_id" id="vehiculo_marca_id" class="form-control">
			<option value="">--Seleccione Marca--</option>
			@foreach($marcas as $marca)
				<option value="{{ $marca->id }}"
					@if(!is_null(old('vehiculo_marca_id')))
						{{ 'selected' }}
					@elseif($marca->id == $vehiculo->vehiculo_marca_id)
						{{ 'selected' }}
					@endif
				>{{ $marca->nombre }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-6 mb-3">
		<label for="vehiculo_clase_id">Tipo</label>
		<select name="vehiculo_clase_id" id="vehiculo_clase_id" class="form-control">
			<option value="">--Seleccione Tipo--</option>
			@foreach($tipos as $tipo)
				<option value="{{ $tipo->id }}"
					@if(!is_null(old('vehiculo_clase_id')))
						{{ 'selected' }}
					@elseif($tipo->id == $vehiculo->vehiculo_clase_id)
						{{ 'selected' }}
					@endif
				>{{ $tipo->nombre }}</option>
			@endforeach
		</select>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="vehiculo_carroceria_id">Carrocería</label>
		<select name="vehiculo_carroceria_id" id="vehiculo_carroceria_id" class="form-control">
			<option value="">--Seleccione Carrocería--</option>
			@foreach($carrocerias as $carroceria)
				<option value="{{ $carroceria->id }}"
					@if(!is_null(old('vehiculo_carroceria_id')))
						{{ 'selected' }}
					@elseif($carroceria->id == $vehiculo->vehiculo_carroceria_id)
						{{ 'selected' }}
					@endif
				>{{ $carroceria->nombre }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-6 mb-3">
		<label for="vehiculo_color_id">Color</label>
		<select name="vehiculo_color_id" id="vehiculo_color_id" class="form-control">
			<option value="">--Seleccione Color--</option>
			@foreach($colores as $color)
				<option value="{{ $color->id }}"
					@if(!is_null(old('vehiculo_color_id')))
						{{ 'selected' }}
					@elseif($color->id == $vehiculo->vehiculo_color_id)
						{{ 'selected' }}
					@endif
				>{{ $color->nombre }}</option>
			@endforeach
		</select>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="vehiculo_configuracion_id">Configuración</label>
		<select name="vehiculo_configuracion_id" id="vehiculo_configuracion_id" class="form-control">
			<option value="">--Seleccione Configuración--</option>
			@foreach($configuraciones as $configuracion)
				<option value="{{ $configuracion->id }}"
					@if(!is_null(old('vehiculo_configuracion_id')))
						{{ 'selected' }}
					@elseif($configuracion->id == $vehiculo->vehiculo_configuracion_id)
						{{ 'selected' }}
					@endif
				>{{ $configuracion->nombre }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-6 mb-3">
		<label for="vehiculo_combustible_id">Combustible</label>
		<select name="vehiculo_combustible_id" id="vehiculo_combustible_id" class="form-control">
			<option value="">--Seleccione Combustible--</option>
			@foreach($combustibles as $combustible)
				<option value="{{ $combustible->id }}"
					@if(!is_null(old('vehiculo_combustible_id')))
						{{ 'selected' }}
					@elseif($combustible->id == $vehiculo->vehiculo_combustible_id)
						{{ 'selected' }}
					@endif
				>{{ $combustible->nombre }}</option>
			@endforeach
		</select>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="tarjeta_propiedad">Tarjeta Propiedad</label>
		<input type="text" class="form-control" name="tarjeta_propiedad" id="tarjeta_propiedad" value="{{ old('tarjeta_propiedad', $vehiculo->tarjeta_propiedad ) }}" required>
	</div>
	<div class="col-md-6 mb-3">
		<label for="tarjeta_operacion">Tarjeta Operación</label>
		<input type="text" class="form-control" name="tarjeta_operacion" id="tarjeta_operacion" value="{{ old('tarjeta_operacion', $vehiculo->tarjeta_operacion ) }}" required>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="expedicion_tarjeta">Expedición Tarjeta</label>
		<input type="text" class="form-control" name="expedicion_tarjeta" id="expedicion_tarjeta" value="{{ old('expedicion_tarjeta', $vehiculo->expedicion_tarjeta ) }}" required>
	</div>
	<div class="col-md-6 mb-3">
		<label for="vence_tarjeta">Vence Tarjeta</label>
		<input type="text" class="form-control" name="vence_tarjeta" id="vence_tarjeta" value="{{ old('vence_tarjeta', $vehiculo->vence_tarjeta ) }}" required>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="modelo">Modelo</label>
		<input type="text" class="form-control" name="modelo" id="modelo" value="{{ old('modelo', $vehiculo->modelo ) }}" required>
	</div>
	<div class="col-md-6 mb-3">
		<label for="linea">Línea</label>
		<input type="text" class="form-control" name="linea" id="linea" value="{{ old('linea', $vehiculo->linea ) }}" required>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="numero_chasis">Número Chasis</label>
		<input type="text" class="form-control" name="numero_chasis" id="numero_chasis" value="{{ old('numero_chasis', $vehiculo->numero_chasis ) }}" required>
	</div>
	<div class="col-md-6 mb-3">
		<label for="numero_motor">Número Motor</label>
		<input type="text" class="form-control" name="numero_motor" id="numero_motor" value="{{ old('numero_motor', $vehiculo->numero_motor ) }}" required>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="numero_serie">Número Serie</label>
		<input type="text" class="form-control" name="numero_serie" id="numero_serie" value="{{ old('numero_serie', $vehiculo->numero_serie ) }}" required>
	</div>
</div>

<div class="form-group">	
	<button type="submit" class="btn btn-primary">Guardar</button>
</div>

@include('layouts.errors')