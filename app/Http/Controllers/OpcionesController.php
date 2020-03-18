<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\TipoVehiculo;
use Sinotur\MarcaVehiculo;
use Sinotur\DetalleInsumo;
use Sinotur\ModeloVehiculo;
use Sinotur\Bloque;
use Sinotur\Http\Requests\MarcaVehiculoRequest;
use Sinotur\Http\Requests\ModeloVehiculoRequest;
use Sinotur\Http\Requests\BloqueRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class OpcionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // View Agregar Marca de Vehiculo
    public function marca()
    {
        return view('opciones.agregarMarca');
    }

    // Guardar datos View Agregar Marca de Vehiculo
    public function agregarMarca(MarcaVehiculoRequest $request)
    {
        $marca = new MarcaVehiculo();
        $marca->nom_marca = $request->nom_marca;
        $marca->save();
        //return $request->all();
        return redirect()->route('marca')->with('flash', 'La Marca fue agregada con exito.');
    }

    // View Agregar Modelo de Vehiculo
    public function modelo()
    {
    	$tvehiculos = TipoVehiculo::all();
    	$marcas = MarcaVehiculo::all();
        $cauchos = DetalleInsumo::select('nom_detalle_insumo','id_detalle_insumo')->where('tipo_insumo_id', '1')->get();
        $baterias = DetalleInsumo::select('nom_detalle_insumo','id_detalle_insumo')->where('tipo_insumo_id', '2')->get();
        $aceites = DetalleInsumo::select('nom_detalle_insumo','id_detalle_insumo')->where('tipo_insumo_id', '3')->get();
        return view('opciones.agregarModelo', compact('tvehiculos', 'marcas', 'cauchos', 'baterias', 'aceites'));
    }

    // Guardar datos View Agregar Modelo de Vehiculo
    public function agregarModelo(ModeloVehiculoRequest $request)
    {
        $modelo = new ModeloVehiculo();
        $modelo->marca_id = $request->marca;
        $modelo->nom_modelo = Str::upper($request->nom_modelo);
        $modelo->tipo_vehic_id = $request->tipo_vehic;
        $modelo->chasis = Str::upper($request->chasis);
        $modelo->carroceria = Str::upper($request->carroceria);
        $modelo->caucho_id = $request->tipo_caucho;
        $modelo->cantidad_caucho = $request->cantidad_caucho;
        $modelo->aceite_id = $request->tipo_aceite;
        $modelo->cantidad_litros = $request->cantidad_litros;
        $modelo->bateria_id = $request->tipo_bateria;
        $modelo->num_puestos = $request->num_puestos;
        $modelo->save();
        //return $request->all();
        return redirect()->route('modelo')
            ->withInput()
            ->with('flash', 'El Modelo fue agregado con exito.');
    }

    // View Agregar Bloque
    public function bloque()
    {
        return view('opciones.agregarBloque');
    }

    // Guardar datos de View Agregar Bloque
    public function agregarBloque(BloqueRequest $request)
    {
        $bloque = new Bloque();
        $bloque->nom_bloque = Str::upper($request->nom_bloque);
        $bloque->nom_resp_principal = Str::upper($request->nom_resp_prin);
        $bloque->apell_resp_principal = Str::upper($request->ape_resp_prin);
        $bloque->telef_resp_principal = $request->telef_resp_prin;
        $bloque->nom_resp_suplente = Str::upper($request->nom_resp_sup);
        $bloque->apell_resp_suplente = Str::upper($request->ape_resp_sup);
        $bloque->telef_resp_suplente = $request->telef_resp_sup;
        $bloque->save();
        //return $request->all();
        return redirect()->route('bloque')
            ->withInput()
            ->with('flash', 'El Bloque fue agregado con exito.');
    }

}
