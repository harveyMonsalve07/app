<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{	
	protected $fillable = [
		'nombre',
		'origen_id',
		'destino_id',
		'observaciones',
		'duracion_recorrido'
	];

	public function origen()
	{
		return $this->belongsTo(Ciudad::class, 'origen_id');
	}

	public function destino()
	{
		return $this->belongsTo(Ciudad::class, 'destino_id');
	}
}
