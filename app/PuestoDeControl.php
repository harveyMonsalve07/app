<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuestoDeControl extends Model
{
	protected $table = 'puestos_de_control';
	protected $fillable = [
		'nombre', 
		'ciudad_id', 
		'ubicacion_mapa', 
		'operario', 
		'telefono', 
		'movil', 
		'avantel', 
		'email', 
		'observaciones', 
		'password_wap',
	];

	public function ciudad()
	{
		return $this->belongsTo(Ciudad::class);
	}

}
