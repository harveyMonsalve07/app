<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropietarioCreacion;
use Illuminate\Http\Request;
use App\Propietario;
use App\CuentaBanco;
use App\Persona;
use App\Banco;

class PropietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $propietarios = Propietario::all();
        return view('propietarios.index', compact('propietarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //envía objetos vacíos al formulario
        $propietario = new Propietario;
        $persona = new Persona;
        $bancos = Banco::All();
        $cuentas_banco = CuentaBanco::All();
        $representantes = Persona::All();
        return view('propietarios.create', compact('propietario', 'persona', 'bancos', 'cuentas_banco' , 'representantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropietarioCreacion $request)
    {
        Propietario::crear($request);
        return redirect('/propietarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Propietario $propietario)
    {
        $persona = new Persona;
        $bancos = Banco::All();
        $cuentas_banco = CuentaBanco::All();
        $representantes = Persona::All();
        return view('propietarios.edit', compact('propietario', 'persona', 'bancos', 'cuentas_banco', 'representantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
