<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConductorCreacion;
use Illuminate\Http\Request;
use App\CajaCompensacion;
use App\CuentaBanco;
use App\EstadoCivil;
use App\Conductor;
use App\Persona;
use App\Eps;
use App\Arl;

class ConductoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductores = Conductor::all();
        return view('conductores.index', compact('conductores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conductor = new Conductor;
        $persona = new Persona;
        $cuentas = CuentaBanco::all();
        $estadosCiviles = EstadoCivil::all();
        $epss = Eps::all();
        $arls = Arl::all();
        $cajas = CajaCompensacion::all();
        return view('conductores.create', 
            compact(
                'conductor', 
                'persona',
                'cuentas',
                'estadosCiviles',
                'epss',
                'arls',
                'cajas'
            ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConductorCreacion $request)
    {
        // dd($request);
        Conductor::crear($request);
        return redirect('/conductores');
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
    public function edit($id)
    {
        //
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
