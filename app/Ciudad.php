<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departamento;

class Ciudad extends Model
{
	protected $table = 'ciudades';
	protected $fillable = ['nombre', 'codigo_dane', 'departamento_id'];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class);
	}
	public function rutas()
	{
		return $this->hasMany(Ruta::class);
	}
	public function origenes()
	{
		return $this->hasMany(Ruta::class, 'origen_id');
	}

	public function destinos()
	{
		return $this->hasMany(Ruta::class, 'destino_id');
	}
	public function puntosDeControl()
	{
		return $this->hasMany(PuestoDeControl::class);
	}

	public function scopeListaIndex($query)
	{
		if (request('departamento')) {
			
			$id_departamento = Departamento::where('nombre', request('departamento'))->pluck('id');

			$query->where('departamento_id', $id_departamento);
		}

		return $query->orderBy('nombre', 'ASC');
	}
	public static function lista()
	{
		return static::orderBy('nombre', 'ASC')->get();
	}
}
