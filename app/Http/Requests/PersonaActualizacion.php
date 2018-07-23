<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaActualizacion extends FormRequest
{
	/**
	* Determine if the user is authorized to make this request.
	*
	* @return bool
	*/
	public function authorize()
	{
		return true;
	}

	/**
	* Get the validation rules that apply to the request.
	*
	* @return array
	*/
	public function rules()
	{
		if (request('documento_tipo') > 0) {
			$documento_tipo = \App\DocumentoTipo::find(request('documento_tipo'));
			$caracteres_min = $documento_tipo->caracteres_min;
			$caracteres_max = $documento_tipo->caracteres_max;
		}

		//Da formato al nombre dependiendo de su tipo de documento
		if ($documento_tipo->tipo == 'N.I.T.') {
			$extra_validacion = [
				'nombre' => 'required|string'
			];
			$this->primer_nombre = '';
			$this->segundo_nombre = '';
			$this->primer_nombre = '';
			$this->segundo_apellido = '';
		}
		else {
			$extra_validacion = [
				'primer_nombre' => 'required|alpha|min:3',
				'segundo_nombre' => 'nullable|alpha|min:3',
				'primer_apellido' => 'required|alpha|min:3',
				'segundo_apellido' => 'required|alpha|min:3'
			];

			$this->nombre = $this->primer_apellido." ".$this->segundo_apellido." ".$this->primer_nombre;
			if ($this->segundo_nombre) $this->nombre .= " ".$this->segundo_nombre;
		}



		$validacion = [
			'documento_tipo' => 'required|integer|exists:documento_tipos,id',
			'numero_identificacion' => "required|integer|digits_between:{$caracteres_min},{$caracteres_max}",
			'documento_ciudad' => 'required|integer|exists:ciudades,id',
			'ciudad' => 'required|integer|exists:ciudades,id',
			'email' => 'nullable|email|min:7',
			'direccion' => 'required|min:4',
			'telefono' => 'nullable|digits_between:7,10|numeric'
		];

		$validacion = array_merge($validacion, $extra_validacion);

		// dd($this->all())
		return $validacion;
	}
}
