<?php

namespace App\Http\Controllers;

use App\Ciudad;
use Illuminate\Http\Request;
use App\Departamento;

class CiudadesController extends Controller
{
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$ciudades = Ciudad::listaIndex()->paginate(3);

		//paginacion
		if (request('departamento')) 
				$ciudades->withPath(route('ciudades.index', [
					'departamento' => request('departamento')
				]));

		$departamentos = Departamento::orderBy('nombre', 'ASC')->get();
		return view('ciudades.index', compact('ciudades', 'departamentos'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{

		$departamentos = Departamento::orderBy('nombre', 'ASC')->get();
		$ciudad = new Ciudad;
		return view('ciudades.create', compact('ciudad', 'departamentos'));
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
			'nombre' => 'required',
			'departamento_id' => 'required|integer',
			'codigo_dane' => 'required|min:1|max:99999|integer'
		]);

		Ciudad::create([
			'nombre' => $request->nombre,
			'departamento_id' => $request->departamento_id,
			'codigo_dane' => $request->codigo_dane
		]);

		session()->flash('message', '¡Ciudad Creada! :D');

		return redirect(route('ciudades.index'));
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Ciudad  $ciudad
	* @return \Illuminate\Http\Response
	*/
	public function show(Ciudad $ciudade)
	{
		$ciudad=$ciudade;
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Ciudad  $ciudad
	* @return \Illuminate\Http\Response
	*/
	public function edit(Ciudad $ciudade)
	{
		$ciudad=$ciudade;

		$departamentos = Departamento::orderBy('nombre', 'ASC')->get();
		return view('ciudades.edit', compact('ciudad', 'departamentos'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Ciudad  $ciudad
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Ciudad $ciudade)
	{
		$request->validate([
			'nombre' => 'required',
			'departamento_id' => 'required|integer',
			'codigo_dane' => 'required|min:1|max:99999|integer'
		]);

		$ciudade->nombre = $request->nombre;
		$ciudade->departamento_id = $request->departamento_id;
		$ciudade->codigo_dane = $request->codigo_dane;

		session()->flash('message', '¡Ciudad Editada! :D');

		return redirect(route('ciudades.edit', $ciudade->id));
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Ciudad  $ciudad
	* @return \Illuminate\Http\Response
	*/
	public function destroy(Ciudad $ciudade)
	{
		//
	}
}
