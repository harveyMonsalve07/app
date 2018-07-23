<?php

namespace App\Http\Controllers;

use App\Ruta;
use Illuminate\Http\Request;

class RutasController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$rutas = Ruta::paginate(2);
		return view('rutas.index', compact('rutas'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		$ruta = new Ruta;
		return view('rutas.create', compact('ruta'));
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
			'nombre' => 'nullable|min:3',
			'ciudad_origen' => 'required|exists:ciudades,id',
			'ciudad_destino' => 'required|exists:ciudades,id',
			'observaciones' => 'nullable|string',
			'duracion_recorrido' => 'nullable|numeric'
		]);


		Ruta::create([
			'nombre' => $request->nombre, 
			'origen_id' => $request->ciudad_origen, 
			'destino_id' => $request->ciudad_destino, 
			'observaciones' => $request->observaciones, 
			'duracion_recorrido' => $request->duracion_recorrido
		]);

		session()->flash('message', '¡Ruta Creada! :D');

		return redirect(route('rutas.index'));
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Ruta  $ruta
	* @return \Illuminate\Http\Response
	*/
	public function show(Ruta $ruta)
	{
	//
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Ruta  $ruta
	* @return \Illuminate\Http\Response
	*/
	public function edit(Ruta $ruta)
	{
		return view('rutas.edit', compact('ruta'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Ruta  $ruta
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Ruta $ruta)
	{
		$request->validate([
			'nombre' => 'nullable|min:3',
			'ciudad_origen' => 'required|exists:ciudades,id',
			'ciudad_destino' => 'required|exists:ciudades,id',
			'observaciones' => 'nullable|string',
			'duracion_recorrido' => 'nullable|numeric'
		]);

		$ruta->nombre = $request->nombre;
		$ruta->origen_id = $request->ciudad_origen;
		$ruta->destino_id = $request->ciudad_destino;
		$ruta->observaciones = $request->observaciones;
		$ruta->duracion_recorrido = $request->duracion_recorrido;

		$ruta->save();

		session()->flash('message', '¡Ruta Actualizada! :D');

		return redirect(route('rutas.index'));
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Ruta  $ruta
	* @return \Illuminate\Http\Response
	*/
	public function destroy(Ruta $ruta)
	{
	//
	}
}
