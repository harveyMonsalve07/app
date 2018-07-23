<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
class Cliente extends Model
{
	protected $fillable = [
		'persona_id',
		'contacto',
		'descripcion'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class);
	}
	public static function crear($request)
	{
		$persona_id = Persona::crear($request);
		self::create([
			'persona_id' => $persona_id,
			'descripcion' => $request->descripcion,
			'contacto' => $request->contacto
		]);


		return session()->flash('message', 'Cliente Creado! :D');
	}

	// public function scopeLista($query)
	// {
	// 	return $query->with(['persona']);
	// }

	public function scopeLista($query)
	{
		return $query->join('personas', 'clientes.persona_id', '=', 'personas.id')
			->orderBy('nombre', 'ASC')
			->select(
				'clientes.*', 
				'personas.*'
			);
	}
}
