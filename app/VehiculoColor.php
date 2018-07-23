<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoColor extends Model
{
	protected $table = 'vehiculo_colores';
    public $timestamps = false;

    public function vehiculos()
    {
    	return $this->hasMany(Vehiculo::class);
    }
}
