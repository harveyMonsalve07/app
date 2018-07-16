<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	public function ciudades()
	{
		return $this->hasMany(Ciudad::class);
	}
	public static function lista()
	{
		return static::orderBy('nombre', 'ASC')->get();
	}
}
