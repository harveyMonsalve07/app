<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model 
{
	
	protected $fillable = [
		'nombre',
		'primer_nombre',
		'segundo_nombre',
		'primer_apellido',
		'segundo_apellido',
		'documento_tipo_id',
		'documento_ciudad_id',
		'direccion',
		'telefono',
		'email',
		'ciudad_id',
		'numero_identificacion'
	];

	public $timestamps = false;

	public function documentoTipo() {
		return $this->belongsTo(DocumentoTipo::class);
	}

	public function cliente() {
		return $this->hasOne(Cliente::class);
	}
	

	public function actualizar($request)
	{
		// dd($request->telefono);
		$this->nombre = $request->nombre;
		$this->primer_nombre = $request->primer_nombre;
		$this->segundo_nombre = $request->segundo_nombre;
		$this->primer_apellido = $request->primer_apellido;
		$this->segundo_apellido = $request->segundo_apellido;
		$this->documento_tipo_id = $request->documento_tipo;
		$this->documento_ciudad_id = $request->documento_ciudad;
		$this->direccion = $request->direccion;
		$this->telefono = $request->telefono;
		$this->email = $request->email;
		$this->ciudad_id = $request->ciudad;
		$this->numero_identificacion = $request->numero_identificacion;	

		$this->save();
	}
	public static function crear($request)
	{
		
		static::create([
			'numero_identificacion' => $request->numero_identificacion,
			'documento_tipo_id' => $request->documento_tipo,
			'documento_ciudad_id' => $request->documento_ciudad,
			'ciudad_id' => $request->ciudad,
			'email' => $request->email,
			'direccion' => $request->direccion,
			'telefono' => $request->telefono,
			'nombre' => $request->nombre, 
			'primer_nombre' => $request->primer_nombre, 
			'segundo_nombre' => $request->segundo_nombre, 
			'primer_apellido' => $request->primer_apellido, 
			'segundo_apellido' => $request->segundo_apellido
		]);
	}
}
