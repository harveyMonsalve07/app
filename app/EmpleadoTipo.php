<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoTipo extends Model
{
    public $timestamps = false;

    public function conductores()
    {
    	return $this->hasMany(Conductor::class);
    }
}
