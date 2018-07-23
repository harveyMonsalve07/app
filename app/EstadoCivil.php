<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
	protected $table = 'estado_civiles';
    public $timestamps = false;

    public function conductores()
    {
    	return $this->hasMany(Conductor::class);
    }
}
