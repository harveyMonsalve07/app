<?php

namespace App\Http\Controllers;

use App\PuestoDeControl;
use Illuminate\Http\Request;

class PuestosDeControlController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$puestos_de_control = PuestoDeControl::paginate(3);
		return view('puestos_de_control.index', compact('puestos_de_control'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		$puesto_de_control = new PuestoDeControl;
		return view('puestos_de_control.create', compact('puesto_de_control'));
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		$request->validate([
			'nombre' => 'nullable|string|min:3',
			'ciudad' => 'required|string|exists:ciudades,id',
			'ubicacion_mapa' => 'nullable|string|min:3',
			'operario' => 'nullable|string|min:3',
			'telefono' => 'nullable|string|min:7',
			'movil' => 'nullable|string|min:10',
			'avantel' => 'nullable|string|min:10',
			'email' => 'nullable|email|min:7',
			'observaciones' => 'nullable|string',
			'password_wap' => 'nullable|string|min:3'
		]);

		PuestoDeControl::create([
			'nombre' => $request->nombre,
			'ciudad_id' => $request->ciudad,
			'ubicacion_mapa' => $request->ubicacion_mapa,
			'operario' => $request->operario,
			'telefono' => $request->telefono,
			'movil' => $request->movil,
			'avantel' => $request->avantel,
			'email' => $request->email,
			'observaciones' => $request->observaciones,
			'password_wap' => $request->password_wap
		]);

		session()->flash('message', '¡Puesto de Control Creado!');

		return redirect(route('puestos_de_control.index'));
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\PuestoDeControl  $puestoDeControl
	* @return \Illuminate\Http\Response
	*/
	public function show(PuestoDeControl $puestoDeControl)
	{
	//
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\PuestoDeControl  $puestoDeControl
	* @return \Illuminate\Http\Response
	*/
	public function edit(PuestoDeControl $puestoDeControl)
	{
	//
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\PuestoDeControl  $puestoDeControl
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, PuestoDeControl $puestoDeControl)
	{
	//
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\PuestoDeControl  $puestoDeControl
	* @return \Illuminate\Http\Response
	*/
	public function destroy(PuestoDeControl $puestoDeControl)
	{
	//
	}
}
