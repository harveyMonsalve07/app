<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoConfiguracion extends Model
{
	protected $table = 'vehiculo_configuraciones';
    public $timestamps = false;

    public function vehiculos()
    {
    	return $this->hasMany(Vehiculo::class);
    }
}
