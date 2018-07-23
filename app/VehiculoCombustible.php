<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoCombustible extends Model
{
    public $timestamps = false;

    public function vehiculos()
    {
    	return $this->hasMany(Vehiculo::class);
    }
}
