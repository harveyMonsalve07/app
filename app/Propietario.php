<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Persona;

class Propietario extends Model
{
    protected $fillable = [
    	'persona_id',
    	'banco_id',
    	'cuenta_banco',
    	'cuenta_tipo_id',
    	'titular_cuenta_banco',
    	'representante_legal_id',
    	'representante_suplente_id',
    	'descripcion'
    ];

    public function persona()
	{
		return $this->belongsTo(Persona::class);
	}

    public static function crear($request)
	{
		$persona = Persona::crear($request);

		self::create([
			'persona_id' => $persona->id,
			'banco_id' => $request->banco_id,
			'cuenta_banco' => $request->cuenta_banco,
			'cuenta_tipo_id' => $request->cuenta_tipo_id,
			'titular_cuenta_banco' => $request->titular_cuenta_banco,
			'representante_legal_id' => $request->representante_legal_id,
			'representante_suplente_id' => $request->representante_suplente_id,
			'descripcion' => $request->descripcion
		]);
	}
}
