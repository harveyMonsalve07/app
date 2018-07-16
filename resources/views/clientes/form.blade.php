@include('personas.form')

<div class="form-row">
	<div class="form-group col-md-6">
		<label for="contacto">Contacto:</label>
		<input type="text" class="form-control form-control-sm" name="contacto" id="contacto" required value="{{ old('contacto',  $cliente->contacto) }}">
	</div>

	{{-- <div class="form-group col-md-6">
		<label for="telefono_contacto">Teléfono:</label>
		<input type="number" class="form-control form-control-sm" name="telefono_contacto" id="telefono_contacto" value="{{ old('telefono_contacto', $cliente->telefono_contacto) }}">
	</div> --}}
</div>

<div class="form-group">
	<label for="descripcion">Descripción:</label>
	<textarea name="descripcion" id="descripcion" class="form-control form-control-sm" required>{{ old('descripcion', $cliente->descripcion) }}</textarea>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">Grabar</button>
</div>