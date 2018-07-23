<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CajaCompensacion extends Model
{
	protected $table = 'caja_compensaciones';
    public $timestamps = false;

    public function conductores()
    {
    	return $this->hasMany(Conductor::class);
    }
}
