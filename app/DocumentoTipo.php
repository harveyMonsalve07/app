<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoTipo extends Model
{
	public function persona()
	{
		return $this->hasMany(Persona::class);
	}
}
