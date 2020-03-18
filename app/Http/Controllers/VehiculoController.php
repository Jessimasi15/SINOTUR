<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\Estado;
use Sinotur\MarcaVehiculo;
use Sinotur\Color;
use Sinotur\Bloque;
use Sinotur\Vehiculo;
use Sinotur\Beneficiario;
use Sinotur\Http\Requests\AsignarVehiculoRequest;
use Illuminate\Support\Str;

class VehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ci = $request->get('benef_ci');
        $rif = $request->get('rif_organizacion');

        $vehiculos = Vehiculo::orderBy('placa', 'ASC')
                ->ci($ci)
                ->rif($rif)
                ->paginate(6);
        return view('vehiculos.vehiculos', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        $marcas = MarcaVehiculo::all();
        $colores = Color::all();
        $bloques = Bloque::all();
        return view('vehiculos.agregarVehiculo', compact('estados', 'marcas', 'colores', 'bloques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsignarVehiculoRequest $request)
    {
        return $request->all();
        $vehiculo = new Vehiculo();
        $vehiculo->placa = Str::upper($request->placa);
        $vehiculo->organizacion_rif = Str::upper($request->rif_org);
        $vehiculo->benef_ci = $request->ci_benef;
        $vehiculo->marca_id = $request->marca;
        $vehiculo->modelo_id = $request->modelo;
        $vehiculo->serial_carroceria = Str::upper($request->serial_carr);
        $vehiculo->serial_motor = Str::upper($request->serial_motor);
        $vehiculo->color_id = $request->color;
        $vehiculo->año_carro = $request->año;
        $vehiculo->save();
        //return $request->all(); 
        return redirect()->action('VehiculoController@create')->with('flash', 'El Vehiculo fue agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($placa)
    {
        $vehiculo = Vehiculo::find($placa);
        return view('vehiculos.vehiculo', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $placa)
    {
        $request->user()->authorizeRoles('admin');
        $vehiculo = Vehiculo::find($placa);
        $colores = Color::all();
        return view('vehiculos.editVehiculo', compact('vehiculo', 'colores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $placa)
    {
        $vehiculo = Vehiculo::find($placa);
        if ($request->color === '0') {
            return redirect()->action('VehiculoController@edit', $vehiculo->placa)->with('alert', 'Llene toda la información para poder actualizar.');
        }
        $vehiculo->organizacion_rif = Str::upper($request->rif_org);
        $vehiculo->benef_ci = $request->ci_benef;
        $vehiculo->color_id = $request->color;
        $vehiculo->save();
        //return $request->all(); 
        return redirect()->action('VehiculoController@show', $vehiculo->placa)->with('flash', 'El Vehiculo fue agregado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $placa)
    {
        $request->user()->authorizeRoles('admin');
        $vehiculo = Vehiculo::find($placa);
        $vehiculo->delete();
        return redirect()->action('BeneficiarioController@index')->with('flash', 'El Vehiculo fue eliminado exitosamente.');
    }
}
