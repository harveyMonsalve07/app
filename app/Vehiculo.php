<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

    protected $fillable = [
        'placa',
        'matricula',
        'fecha_matricula',
        'vehiculo_servicio_id',
        'vehiculo_marca_id',
        'vehiculo_clase_id',
        'vehiculo_carroceria_id',
        'vehiculo_color_id',
        'vehiculo_configuracion_id',
        'vehiculo_combustible_id',
        'tarjeta_propiedad',
        'tarjeta_operacion',
        'expedicion_tarjeta',
        'vence_tarjeta',
        'modelo',
        'linea',
        'numero_chasis',
        'numero_motor',
        'numero_serie'
    ];

    public function vehiculoCarroceria()
    {
    	return $this->belongsTo(VehiculoCarroceria::class);
    }

    public function vehiculoColor()
    {
    	return $this->belongsTo(VehiculoColor::class);
    }

    public function vehiculoCombustible()
    {
    	return $this->belongsTo(VehiculoCombustible::class);
    }

    public function vehiculoConfiguracion()
    {
    	return $this->belongsTo(VehiculoConfiguracion::class);
    }

    public function vehiculoMarca()
    {
    	return $this->belongsTo(VehiculoMarca::class);
    }

    public function vehiculoServicio()
    {
    	return $this->belongsTo(VehiculoServicio::class);
    }

    public function vehiculoTipo()
    {
    	return $this->belongsTo(VehiculoTipo::class);
    }

    public static function crear()
    {
        self::create([
            'placa' => request('placa'),
            'matricula' => request('matricula'),
            'fecha_matricula' => request('fecha_matricula'),
            'vehiculo_servicio_id' => request('vehiculo_servicio_id'),
            'vehiculo_marca_id' => request('vehiculo_marca_id'),
            'vehiculo_clase_id' => request('vehiculo_clase_id'),
            'vehiculo_carroceria_id' => request('vehiculo_carroceria_id'),
            'vehiculo_color_id' => request('vehiculo_color_id'),
            'vehiculo_configuracion_id' => request('vehiculo_configuracion_id'),
            'vehiculo_combustible_id' => request('vehiculo_combustible_id'),
            'tarjeta_propiedad' => request('tarjeta_propiedad'),
            'tarjeta_operacion' => request('tarjeta_operacion'),
            'expedicion_tarjeta' => request('expedicion_tarjeta'),
            'vence_tarjeta' => request('vence_tarjeta'),
            'modelo' => request('modelo'),
            'linea' => request('linea'),
            'numero_chasis' => request('numero_chasis'),
            'numero_motor' => request('numero_motor'),
            'numero_serie' => request('numero_serie')
        ]);
    }

    public function actualizar($request)
    {   
        $this->placa = $request->placa;
        $this->matricula = $request->matricula;
        $this->fecha_matricula = $request->fecha_matricula;
        $this->vehiculo_servicio_id = $request->vehiculo_servicio_id;
        $this->vehiculo_marca_id = $request->vehiculo_marca_id;
        $this->vehiculo_clase_id = $request->vehiculo_clase_id;
        $this->vehiculo_carroceria_id = $request->vehiculo_carroceria_id;
        $this->vehiculo_color_id = $request->vehiculo_color_id;
        $this->vehiculo_configuracion_id = $request->vehiculo_configuracion_id;
        $this->vehiculo_combustible_id = $request->vehiculo_combustible_id;
        $this->tarjeta_propiedad = $request->tarjeta_propiedad;
        $this->tarjeta_operacion = $request->tarjeta_operacion;
        $this->expedicion_tarjeta = $request->expedicion_tarjeta;
        $this->vence_tarjeta = $request->vence_tarjeta;
        $this->modelo = $request->modelo;
        $this->linea = $request->linea;
        $this->numero_chasis = $request->numero_chasis;
        $this->numero_motor = $request->numero_motor;
        $this->numero_serie = $request->numero_serie;
        $this->save();
    }
}
