<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = 'conductores';

    protected $fillable = [
        'persona_id',
        'licencia',
        'vence_licencia',
        'categoria_licencia',
        'fecha_nacimiento',
        'banco_id',
        'cuenta_banco',
        'cuenta_tipo_id',
        'titular_cuenta_banco',
        'rh',
        'estado_civil_id',
        'conyugue',
        'numero_identificacion_conyugue',
        'eps_id',
        'arl_id',
        'caja_compensacion_id',
        'estudios',
        'conduccion',
        'carga',
        'mecanica',
        'peligrosa',
        'otros',
        'vence_aportes',
        'vence_ocupacional',
        'vence_visiometria',
        'vence_audiometria',
        'vence_psicosensometrico',
        'vence_prueba_teorica',
        'vence_prueba_practica',
        'inicio_contrato',
        'fin_contrato',
        'valor_contrato',
        'descripcion'
    ];

    public function arl()
    {
    	$this->belongsTo(Arl::class);
    }

    public function caja()
    {
    	$this->belongsTo(CajaCompensacion::class);
    }

    public function eps()
    {
    	$this->belongsTo(Eps::class);
    }

    public function tipoEmpleado()
    {
    	$this->belongsTo(EmpleadoTipo::class);
    }

    public function estadoCivil()
    {
    	$this->belongsTo(EstadoCivil::class);
    }

    public static function crear($request)
    {
        $persona = Persona::crear($request);

        self::create([
            'persona_id' => $persona->id,
            'licencia' => $request->licencia,
            'vence_licencia' => $request->vence_licencia,
            'categoria_licencia' => $request->categoria_licencia,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'banco_id' => $request->banco_id,
            'cuenta_banco' => $request->cuenta_banco,
            'cuenta_tipo_id' => $request->cuenta_tipo_id,
            'titular_cuenta_banco' => $request->titular_cuenta_banco,
            'rh' => $request->rh,
            'estado_civil_id' => $request->estado_civil_id,
            'conyugue' => $request->conyugue,
            'numero_identificacion_conyugue' => $request->numero_identificacion_conyugue,
            'eps_id' => $request->eps_id,
            'arl_id' => $request->arl_id,
            'caja_compensacion_id' => $request->caja_compensacion_id,
            'estudios' => $request->estudios,
            'conduccion' => $request->conduccion,
            'carga' => $request->carga,
            'mecanica' => $request->mecanica,
            'peligrosa' => $request->peligrosa,
            'otros' => $request->otros,
            'vence_aportes' => $request->vence_aportes,
            'vence_ocupacional' => $request->vence_ocupacional,
            'vence_visiometria' => $request->vence_visiometria,
            'vence_audiometria' => $request->vence_audiometria,
            'vence_psicosensometrico' => $request->vence_psicosensometrico,
            'vence_prueba_teorica' => $request->vence_prueba_teorica,
            'vence_prueba_practica' => $request->vence_prueba_practica,
            'inicio_contrato' => $request->inicio_contrato,
            'fin_contrato' => $request->fin_contrato,
            'valor_contrato' => $request->valor_contrato,
            'descripcion' => $request->descripcion 
        ]);
    }
}
