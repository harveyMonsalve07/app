<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Persona;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteCreacion;

class ClientesController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$clientes = Cliente::lista()->paginate(10);
		return view('clientes.index', compact('clientes'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		//envía objetos vacíos al formulario
		$cliente = new Cliente;
		$persona = new Persona;
		return view('clientes.create', compact('cliente', 'persona'));
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(ClienteCreacion $request)
	{
		Cliente::crear($request);
		return redirect(route('clientes.index'));
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Cliente  $cliente
	* @return \Illuminate\Http\Response
	*/
	public function show(Cliente $cliente)
	{

	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Cliente  $cliente
	* @return \Illuminate\Http\Response
	*/
	public function edit(Cliente $cliente)
	{
		$persona = Persona::find($cliente->persona_id);
		return view('clientes.edit', compact('cliente', 'persona'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Cliente  $cliente
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Cliente $cliente)
	{
		
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Cliente  $cliente
	* @return \Illuminate\Http\Response
	*/
	public function destroy(Cliente $cliente)
	{

	}
}
