<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoActualizacion extends FormRequest
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
        return [
            'placa' => 'required|alpha_num|size:6',
            'matricula' => 'alpha',
            'fecha_matricula' => 'date',
            'vehiculo_servicio_id' => 'required|numeric',
            'vehiculo_marca_id' => 'required|numeric',
            'vehiculo_clase_id' => 'required|numeric',
            'vehiculo_carroceria_id' => 'required|numeric',
            'vehiculo_color_id' => 'required|numeric',
            'vehiculo_configuracion_id' => 'required|numeric',
            'vehiculo_combustible_id' => 'required|numeric',
            'tarjeta_propiedad' => 'nullable',
            'tarjeta_operacion' => 'nullable',
            'expedicion_tarjeta' => 'date',
            'vence_tarjeta' => 'date',
            'modelo' => 'required|numeric',
            'linea' => 'nullable',
            'numero_chasis' => 'nullable',
            'numero_motor' => 'nullable',
            'numero_serie' => 'nullable'
        ];
    }
}
