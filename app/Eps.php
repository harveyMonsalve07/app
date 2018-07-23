<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    public $timestamps = false;

    public function conductores()
    {
    	return $this->hasMany(Conductor::class);
    }
}
