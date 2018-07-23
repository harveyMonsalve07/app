<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
	protected $fillable = [
		'nombre',
		'cheque',
		'ciudad_id',
		'cuenta'
	];

	public static function crear($request)
	{
		$request->validate([
			'nombre' => 'required',
			'ciudad' => 'required|numeric|exists:ciudades,id',
			'cheque' => 'nullable|numeric',
			'cuenta' => 'nullable|numeric',
		]);

		$banco = new self;
		$banco->nombre= request('nombre');
		$banco->ciudad_id= request('ciudad');
		$banco->cheque= request('cheque');
		$banco->cuenta= request('cuenta');

		$banco->save();
		return session()->flash('message', '¡Banco Creado! :D');
	}

	public function actualizar($request)
	{
		$request->validate([
			'nombre' => 'required',
			'ciudad' => 'required|numeric|exists:ciudades,id',
			'cheque' => 'nullable|numeric',
			'cuenta' => 'nullable|numeric'
		]);

		$this->nombre= request('nombre');
		$this->ciudad_id= request('ciudad');
		$this->cheque= request('cheque');
		$this->cuenta= request('cuenta');

		$this->save();

		return session()->flash('message', '¡Banco Actualizado! :D');
	}

}
