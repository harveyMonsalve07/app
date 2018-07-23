<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\PersonaCreacion;

class PropietarioCreacion extends PersonaCreacion
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
            'banco_id' => 'nullable',
            'cuenta_banco' => 'nullable',
            'cuenta_tipo_id' => 'nullable',
            'titular_cuenta_banco' => 'nullable',
            'representante_legal_id' => 'nullable',
            'representante_suplente_id' => 'nullable',
            'descripcion' => 'nullable'
        ];
    }
}
