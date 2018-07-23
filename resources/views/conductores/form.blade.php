@include('personas.form')

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="cuenta_banco">Cuenta</label>
		<input type="text" class="form-control" name="cuenta_banco" id="cuenta_banco" value="{{ old('cuenta_banco', $conductor->cuenta_banco ) }}">
	</div>
	<div class="col-md-6 mb-3">
		<label for="nombre_banco">Banco</label>
		<input type="text" class="form-control" name="nombre_banco" id="nombre_banco" value="{{ old('nombre_banco', $conductor->nombre_banco ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="tipo_cuenta_id">Tipo Cuenta</label>
		<select name="tipo_cuenta_id" id="tipo_cuenta_id" class="form-control">
			<option value="0">Tipo Cuenta</option>
			@foreach($cuentas as $cuenta)
				<option value="{{ $cuenta->id }}" <?php if ( $cuenta->id == $conductor->tipo_cuenta_id ) echo "selected"; ?>>
					{{ $cuenta->tipo_cuenta }}
				</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-6 mb-3">
		<label for="titular_cuenta">Titular Cuenta</label>
		<input type="text" class="form-control" name="titular_cuenta" id="titular_cuenta" value="{{ old('titular_cuenta', $conductor->titular_cuenta ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="ciudad">Ciudad</label>
		<input type="text" class="form-control" name="ciudad" id="ciudad" value="{{ old('ciudad', $conductor->ciudad ) }}">
	</div>
	<div class="col-md-6 mb-3">
		<label for="departamento">Departamento</label>
		<input type="text" class="form-control" name="departamento" id="departamento" value="{{ old('departamento', $conductor->departamento ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="licencia">Licencia</label>
		<input type="text" class="form-control" name="licencia" id="licencia" value="{{ old('licencia', $conductor->licencia ) }}">
	</div>
	<div class="col-md-4 mb-3">
		<label for="categoria_licencia">Categoría</label>
		<input type="text" class="form-control" name="categoria_licencia" id="categoria_licencia" value="{{ old('categoria_licencia', $conductor->categoria_licencia ) }}">
	</div>

	<div class="col-md-4 mb-3">
		<label for="vence_licencia">Vencimiento</label>
		<input type="text" class="form-control" name="vence_licencia" id="vence_licencia" value="{{ old('vence_licencia', $conductor->vence_licencia ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="fecha_nacimiento">Fecha Nacimiento</label>
		<input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento', $conductor->fecha_nacimiento ) }}">
	</div>
	<div class="col-md-4 mb-3">
		<label for="rh">RH</label>
		<input type="text" class="form-control" name="rh" id="rh" value="{{ old('rh', $conductor->rh ) }}">
	</div>

	<div class="col-md-4 mb-3">
		<label for="vencimiento">Estado Civil</label>
		<select name="estado_civil_id" id="estado_civil_id" class="form-control">
			<option value="0">------------------</option>
			@foreach($estadosCiviles as $estadoCivil)
				<option value="{{ $estadoCivil->id }}" <?php if ( $estadoCivil->id == $conductor->estado_civil_id ) echo "selected"; ?>>
					{{ $estadoCivil->estado_civil }}
				</option>
			@endforeach
		</select>
	</div>
</div>

<div class="row">
	<div class="col-md-6 mb-3">
		<label for="conyugue">Cónyugue</label>
		<input type="text" class="form-control" name="conyugue" id="conyugue" value="{{ old('conyugue', $conductor->conyugue ) }}">
	</div>
	<div class="col-md-6 mb-3">
		<label for="nip_conyugue">NIP Cónyugue</label>
		<input type="text" class="form-control" name="nip_conyugue" id="nip_conyugue" value="{{ old('nip_conyugue', $conductor->nip_conyugue ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="eps_id">EPS</label>
		<select name="eps_id" id="eps_id" class="form-control">
			<option value="0">------------------</option>
			@foreach($epss as $eps)
				<option value="{{ $eps->id }}" <?php if ( $eps->id == $conductor->eps_id ) echo "selected"; ?>>
					{{ $eps->eps }}
				</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-4 mb-3">
		<label for="arl_id">ARL</label>
		<select name="arl_id" id="arl_id" class="form-control">
			<option value="0">------------------</option>
			@foreach($arls as $arl)
				<option value="{{ $arl->id }}" <?php if ( $arl->id == $conductor->arl_id ) echo "selected"; ?>>
					{{ $arl->arl }}
				</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-4 mb-3">
		<label for="caja_compensacion_id">Caja de Compensación</label>
		<select name="caja_compensacion_id" id="caja_compensacion_id" class="form-control">
			<option value="0">------------------</option>
			@foreach($cajas as $caja)
				<option value="{{ $caja->id }}" <?php if ( $caja->id == $conductor->caja_compensacion_id ) echo "selected"; ?>>
					{{ $caja->caja_compensacion }}
				</option>
			@endforeach
		</select>
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="estudios">Estudios</label>
		<select name="estudios" id="estudios" class="form-control">
			<option value=""  <?php if ( $conductor->estudios == "" ) echo "selected"; ?>>------</option>
			<option value="0" <?php if ( $conductor->estudios == "0" ) echo "selected"; ?>>No</option>
			<option value="1" <?php if ( $conductor->estudios == "1" ) echo "selected"; ?>>Si</option>
		</select>
	</div>
	<div class="col-md-4 mb-3">
		<label for="conduccion">Conducción</label>
		<select name="conduccion" id="conduccion" class="form-control">
			<option value=""  <?php if ( $conductor->conducccion == "" ) echo "selected"; ?>>------</option>
			<option value="0" <?php if ( $conductor->conduccion == "0" ) echo "selected"; ?>>No</option>
			<option value="1" <?php if ( $conductor->conduccion == "1" ) echo "selected"; ?>>Si</option>
		</select>
	</div>
	<div class="col-md-4 mb-3">
		<label for="carga">Carga</label>
		<select name="carga" id="carga" class="form-control">
			<option value=""  <?php if ( $conductor->carga == "" ) echo "selected"; ?>>------</option>
			<option value="0" <?php if ( $conductor->carga == "0" ) echo "selected"; ?>>No</option>
			<option value="1" <?php if ( $conductor->carga == "1" ) echo "selected"; ?>>Si</option>
		</select>
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="mecanica">Mecánica</label>
		<select name="mecanica" id="mecanica" class="form-control">
			<option value=""  <?php if ( $conductor->mecanica == "" ) echo "selected"; ?>>------</option>
			<option value="0" <?php if ( $conductor->mecanica == "0" ) echo "selected"; ?>>No</option>
			<option value="1" <?php if ( $conductor->mecanica == "0" ) echo "selected"; ?>>Si</option>
		</select>
	</div>
	<div class="col-md-4 mb-3">
		<label for="peligrosa">Peligrosa</label>
		<select name="peligrosa" id="peligrosa" class="form-control">
			<option value=""  <?php if ( $conductor->peligrosa == "" ) echo "selected"; ?>>------</option>
			<option value="0" <?php if ( $conductor->peligrosa == "0" ) echo "selected"; ?>>No</option>
			<option value="1" <?php if ( $conductor->peligrosa == "1" ) echo "selected"; ?>>Si</option>
		</select>
	</div>
	<div class="col-md-4 mb-3">
		<label for="otros">Otros</label>
		<input type="text" class="form-control" name="otros" id="otros" value="{{ old('otros', $conductor->otros ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="vence_aportes">Vencimiento Aportes</label>
		<input type="text" class="form-control" name="vence_aportes" id="vence_aportes" value="{{ old('vence_aportes', $conductor->vence_aportes ) }}">
	</div>
	<div class="col-md-4 mb-3">
		<label for="ocupacional">Vencimiento Ocupacional</label>
		<input type="text" class="form-control" name="ocupacional" id="ocupacional" value="{{ old('ocupacional', $conductor->ocupacional ) }}">
	</div>
	<div class="col-md-4 mb-3">
		<label for="visiometria">Vencimiento Visiometría</label>
		<input type="text" class="form-control" name="visiometria" id="visiometria" value="{{ old('visiometria', $conductor->visiometria ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="audiometria">Vencimiento Audiometía</label>
		<input type="text" class="form-control" name="audiometria" id="audiometria" value="{{ old('audiometria', $conductor->audiometria ) }}">
	</div>
	<div class="col-md-4 mb-3">
		<label for="psico">Psicosensométrica</label>
		<input type="text" class="form-control" name="psico" id="psico" value="{{ old('psico', $conductor->psico ) }}">
	</div>
	<div class="col-md-4 mb-3">
		<label for="prueba_teorica">Prueba Teórica</label>
		<input type="text" class="form-control" name="prueba_teorica" id="prueba_teorica" value="{{ old('prueba_teorica', $conductor->prueba_teorica ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="prueba_practica">Prueba Práctica</label>
		<input type="text" class="form-control" name="prueba_practica" id="prueba_practica" value="{{ old('prueba_practica', $conductor->prueba_practica ) }}">
	</div>
	<div class="col-md-4 mb-3">
		<label for="inicio_contrato">Inicio Contrato</label>
		<input type="text" class="form-control" name="inicio_contrato" id="inicio_contrato" value="{{ old('inicio_contrato', $conductor->inicio_contrato ) }}">
	</div>
	<div class="col-md-4 mb-3">
		<label for="fin_contrato">Fin Contrato</label>
		<input type="text" class="form-control" name="fin_contrato" id="fin_contrato" value="{{ old('fin_contrato', $conductor->fin_contrato ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-4 mb-3">
		<label for="valor_contrato">Valor Contrato</label>
		<input type="text" class="form-control" name="valor_contrato" id="valor_contrato" value="{{ old('valor_contrato', $conductor->valor_contrato ) }}">
	</div>
</div>

<div class="row">
	<div class="col-md-12 mb-3">
		<label for="observaciones">Observaciones</label>
		<textarea class="form-control" name="observaciones" id="observaciones"></textarea>
	</div>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">Grabar</button>
</div>