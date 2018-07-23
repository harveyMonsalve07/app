<?php

namespace App\Http\Controllers;

use App\Banco;
use Illuminate\Http\Request;

class BancosController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{

		$bancos = Banco::orderBy('nombre', 'ASC')->paginate(1);
		return view('bancos.index', compact('bancos'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		$banco = new Banco;
		return view('bancos.create', compact('banco'));
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		Banco::crear($request);
		return redirect(route('bancos.index'));
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Banco  $banco
	* @return \Illuminate\Http\Response
	*/
	public function show(Banco $banco)
	{
		//
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Banco  $banco
	* @return \Illuminate\Http\Response
	*/
	public function edit(Banco $banco)
	{
		return view('bancos.edit', compact('banco'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Banco  $banco
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Banco $banco)
	{
		$banco->actualizar($request);
		return redirect(route('bancos.index'));

	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Banco  $banco
	* @return \Illuminate\Http\Response
	*/
	public function destroy(Banco $banco)
	{
		//
	}
}
