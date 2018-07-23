<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arl extends Model
{
    public $timestamps = false;

    public function conductores()
    {
    	return $this->hasMany(Conductor::class);
    }
}
