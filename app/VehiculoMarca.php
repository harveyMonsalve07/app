<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoMarca extends Model
{
    public $timestamps = false;

    public function vehiculos()
    {
    	return $this->hasMany(Vehiculo::class);
    }
}
