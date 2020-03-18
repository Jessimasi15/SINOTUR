<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\EntregaInsumo;
use Sinotur\TipoVehiculo;
use Sinotur\Jornada;
use Sinotur\Inventario;
use Sinotur\Vehiculo;
use Sinotur\AsignarBeneficiario;
use Sinotur\Http\Requests\EntregaInsumosRequest;

class EntregaController extends Controller
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
    public function index()
    {
        $entregados = EntregaInsumo::all();
        return view('jornada.entrega.entregado', compact('entregados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jornadas = Jornada::where('estatus', 'ABIERTA')->get();
        return view('jornada.entrega.entregaInsumo', compact('jornadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntregaInsumosRequest $request)
    {
        $asignaciones = AsignarBeneficiario::where([['jornada_id', $request->jornada], ['placa', $request->placa]])->get();
        
        // Si a la placa NO se encuentra en la tabla AsignarBeneficiario
        if ($asignaciones->isEmpty()) {
            //return 'a esta placa NO se le asignaron insumos para esta jornada';
            return redirect()->action('EntregaController@index')->with('alert', 'A esta Placa no se le asignaron insumos para esta jornada.');
        }
        $jornadas = Jornada::where('id_jornada', $request->jornada)->get();
        $vehiculos = Vehiculo::where('placa', $request->placa)->get();
        //return $asignaciones;
        // La Placa se encuentra en la tabla AsignarBeneficiario
        foreach ($asignaciones as $asig) {
            $id_asig = $asig->id_asignar_benef;
            //$id_jor = $asig->jornada_id;
            $placa = $asig->placa;

            $entregado = EntregaInsumo::where('asignar_benef_id', $id_asig)->get();

            // Si la id_asig ya se encuentra en la tabla EntregaInsumo
            if (!$entregado->isEmpty()) {
                //return 'esta id existe en entrega insumo';
                return redirect()->action('EntregaController@index')->with('alert', 'Este insumo ya fue entregado.');
            }
            // Si aun no se ha entregado
            return view('jornada.entrega.entregaBeneficiarios', compact('asignaciones', 'jornadas', 'vehiculos'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($asignado)
    {
        $entregar = AsignarBeneficiario::find($asignado);
        $entregado = EntregaInsumo::where('asignar_benef_id', $entregar->id_asignar_benef)->get();

        // Si la id_asig ya se encuentra en la tabla EntregaInsumo
        if (!$entregado->isEmpty()) {
            //return 'esta id existe en entrega insumo';
            return redirect()->back()->with('alert', 'Este insumo ya fue entregado.');
        }

        $cantidad_entregar = $entregar->cantidad_entregar;

        $jornada = Jornada::select('almacen_id')->where('id_jornada', $entregar->jornada_id)->get();
        foreach ($jornada as $jorn) {
            $almacen = $jorn->almacen_id;
        }
        
        $consulta = Inventario::where([['almacen_id', $almacen], ['insumos_id', $entregar->insumos_id], ['medida_id', $entregar->medida_id]])->get();
        
         foreach ($consulta as $cons) {
            $id_inv = $cons->id_inventario;
            $cantidad = $cons->cantidad_total;
            $total = $cons->cantidad_asignada;
            $estatus = $cons->estatus;

            if ($cantidad === 0 && $total === 0) {
                return redirect()->back()->with('alert', 'Ya no hay insumos en este almacen.');
            }

            if ($estatus === 'ENTREGADO') {
                return redirect()->back()->with('alert', 'Este insumo ya fue entregado.');
            }
            // Se restan del inventario la cantidad entregada
            $cantidad = $cantidad - $cantidad_entregar;
            $total = $total - $cantidad_entregar;

            
            $entregado = new EntregaInsumo();
            $entregado->asignar_benef_id = $entregar->id_asignar_benef;
            $entregado->jornada_id = $entregar->jornada_id;
            $entregado->placa = $entregar->placa;
            $entregado->tipo_insumo_id = $entregar->tipo_insumo_id;
            $entregado->insumos_id = $entregar->insumos_id;
            $entregado->medida_id = $entregar->medida_id;
            $entregado->cantidad_entregada = $entregar->cantidad_entregar;
            $entregado->estatus = 'ENTREGADO';
            $entregado->save();

            $cambio_estatus = AsignarBeneficiario::find($asignado);
            $cambio_estatus->estatus = 'ENTREGADO';
            $cambio_estatus->save();

            $insumo = Inventario::find($id_inv);
            $insumo->cantidad_total = $cantidad;
            $insumo->cantidad_asignada = $total;
            $insumo->save();

            return redirect()->action('EntregaController@index')->with('flash', 'Entrega de insumo exitosa.');
        }

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
