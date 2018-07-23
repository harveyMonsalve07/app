@include('personas.form')

<div class="form-row">
	<div class="form-group col-md-6">
		<label for="cuenta_banco">Cuenta Banco:</label>
		<input type="text" class="form-control form-control-sm" name="cuenta_banco" id="cuenta_banco" value="{{ old('cuenta_banco',  $propietario->cuenta_banco) }}">
	</div>

	<div class="form-group col-md-6">
		<label for="banco_id">Banco:</label>

		<select class="form-control form-control-sm" name="banco_id" id="banco_id">
			<option value=""></option>

			@foreach ($bancos as $banco)

				@if (old('banco_id', $propietario->banco_id) == $banco->id)
					<option value="{{ $banco->id }}" selected>
						{{ $banco->nombre }}
					</option>
				@else
					<option value="{{ $banco->id }}">
						{{ $banco->nombre }}
					</option>
				@endif

			@endforeach
		</select>
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-6">
		<label for="cuenta_tipo_id">Tipo Cuenta:</label>

		<select class="form-control form-control-sm" name="cuenta_tipo_id" id="cuenta_tipo_id">
			<option value=""></option>

			@foreach ($cuentas_banco as $cuenta_banco)

				@if (old('cuenta_tipo_id', $propietario->cuenta_tipo_id) == $cuenta_banco->id)
					<option value="{{ $cuenta_banco->id }}" selected>
						{{ $cuenta_banco->nombre }}
					</option>
				@else
					<option value="{{ $cuenta_banco->id }}">
						{{ $cuenta_banco->nombre }}
					</option>
				@endif

			@endforeach
		</select>
	</div>
	<div class="form-group col-md-6">
		<label for="titular_cuenta_banco">Titular Cuenta:</label>
		<input type="text" class="form-control form-control-sm" name="titular_cuenta_banco" id="titular_cuenta_banco" value="{{ old('titular_cuenta_banco',  $propietario->titular_cuenta_banco) }}">
	</div>
</div>

<div class="form-group">
	<label for="representante_legal_id">Representante Legal:</label>
	<select class="form-control form-control-sm" name="representante_legal_id" id="representante_legal_id">
		<option value=""></option>

		@foreach ($representantes as $representante)

			@if (old('representante_legal_id', $propietario->representante_legal_id) == $representante->id)
				<option value="{{ $documento_tipo->id }}" selected>
					{{ $representante->numero_identificacion }}
				</option>
			@else
				<option value="{{ $representante->id }}">
					{{ $representante->numero_identificacion }}
				</option>
			@endif

		@endforeach
	</select>
</div>

<div class="form-group">
	<label for="representante_suplente_id">Representante Legal Suplente:</label>
	<select class="form-control form-control-sm" name="representante_suplente_id" id="representante_suplente_id">
		<option value=""></option>

		@foreach ($representantes as $representante)

			@if (old('representante_suplente_id', $propietario->representante_suplente_id) == $representante->id)
				<option value="{{ $documento_tipo->id }}" selected>
					{{ $representante->numero_identificacion }}
				</option>
			@else
				<option value="{{ $representante->id }}">
					{{ $representante->numero_identificacion }}
				</option>
			@endif

		@endforeach
	</select>
</div>

<div class="form-group">
	<label for="descripcion">Observación:</label>
	<textarea id="descripcion" name="descripcion" class="form-control">{{ old('descripcion',  $propietario->descripcion) }}</textarea>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">Grabar</button>
</div>