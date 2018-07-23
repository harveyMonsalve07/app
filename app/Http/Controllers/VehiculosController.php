<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiculoActualizacion;
use App\Http\Requests\VehiculoCreacion;
use Illuminate\Http\Request;
use App\VehiculoConfiguracion;
use App\VehiculoCarroceria;
use App\VehiculoCombustible;
use App\VehiculoServicio;
use App\VehiculoColor;
use App\VehiculoMarca;
use App\VehiculoTipo;
use App\Vehiculo;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculo = new Vehiculo;
        $servicios = VehiculoServicio::all();
        $marcas = VehiculoMarca::all();
        $tipos = VehiculoTipo::all();
        $carrocerias = VehiculoCarroceria::all();
        $colores = VehiculoColor::all();
        $configuraciones = VehiculoConfiguracion::all();
        $combustibles = VehiculoCombustible::all();
        return view('vehiculos.create', 
            compact(
                'vehiculo', 
                'servicios',
                'marcas',
                'tipos',
                'carrocerias',
                'colores',
                'configuraciones',
                'combustibles'
            ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoCreacion $request)
    {
        Vehiculo::crear($request);
        // $servicios = VehiculoServicio::all();
        // $marcas = VehiculoMarca::all();
        // $tipos = VehiculoTipo::all();
        // $carrocerias = VehiculoCarroceria::all();
        // $colores = VehiculoColor::all();
        // $configuraciones = VehiculoConfiguracion::all();
        // $combustibles = VehiculoCombustible::all();
        return redirect('/vehiculos');
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
    public function edit(Vehiculo $vehiculo)
    {
        $servicios = VehiculoServicio::all();
        $marcas = VehiculoMarca::all();
        $tipos = VehiculoTipo::all();
        $carrocerias = VehiculoCarroceria::all();
        $colores = VehiculoColor::all();
        $configuraciones = VehiculoConfiguracion::all();
        $combustibles = VehiculoCombustible::all();
        return view('vehiculos.edit', 
            compact(
                'vehiculo',
                'servicios',
                'marcas',
                'tipos',
                'carrocerias',
                'colores',
                'configuraciones',
                'combustibles'
            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculoActualizacion $request, Vehiculo $vehiculo)
    {
        $vehiculo->actualizar($request);
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
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
