<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\PersonaCreacion;

class ConductorCreacion extends PersonaCreacion
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
        return parent::rules() + [
            'licencia' => 'required|numeric|between:5,15',
            'vence_licencia' => 'required|date',
            'categoria_licencia' => 'required|alpha_num|size:2',
            'fecha_nacimiento' => 'required|date',
            'banco_id' => 'nullable|numeric'.
            'cuenta_banco' => 'nullable',
            'cuenta_tipo_id' => 'nullable|numeric',
            'titular_cuenta_banco' => 'nullable',
            'rh' => 'nullable',
            'estado_civil_id' => 'required|numeric',
            'conyugue' => 'nullable|alpha',
            'numero_identificacion_conyugue' => 'nullable|numeric',
            'eps_id' => 'nullable|numeric',
            'arl_id' => 'nullable|numeric',
            'caja_compensacion_id' => 'nullable|numeric',
            'estudios' => 'nullable|numeric',
            'conduccion' => 'nullable|numeric',
            'carga' => 'nullable|numeric',
            'mecanica' => 'nullable|numeric',
            'peligrosa' => 'nullable|numeric',
            'otros' => 'nullable',
            'vence_aportes' => 'nullable|date',
            'vence_ocupacional' => 'nullable|date',
            'vence_visiometria' => 'nullable|date',
            'vence_audiometria' => 'nullable|date',
            'vence_psicosensometrico' => 'nullable|date',
            'vence_prueba_teorica' => 'nullable|date',
            'vence_prueba_practica' => 'nullable|date',
            'inicio_contrato' => 'nullable|date',
            'fin_contrato' => 'nullable|date',
            'valor_contrato' => 'nullable|numeric',
            'descripcion' => 'nullable'
        ];
    }
}
