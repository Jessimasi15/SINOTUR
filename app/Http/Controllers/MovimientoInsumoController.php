<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\TipoInsumo;
use Sinotur\Almacen;
use Sinotur\MovimientoInsumo;
use Sinotur\Inventario;
use Sinotur\Http\Requests\AsignacionInsumoRequest;
use DB;

class MovimientoInsumoController extends Controller
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
        return redirect()->action('EntradaInsumoController@index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $almacenes = Almacen::select('nom_almacen', 'id_almacen')->whereNotIn('id_almacen', [1])->get();
        $tinsumos = TipoInsumo::all();
        return view('inventario.movimientoInsumo.movimientoInsumos', compact('tinsumos', 'almacenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsignacionInsumoRequest $request)
    {
        // CONSULTA SI HAY INVENTARIO EN EL ALMACEN CENTRAL
        $inventario = Inventario::where([['almacen_id', '1'], ['marca_id', $request->marca_insumos], ['insumos_id', $request->det_insumo], ['medida_id', $request->medida]])->get();

        // Si no existe inventario 
        if ($inventario->isEmpty()) {
            return redirect()->action('MovimientoInsumoController@create')
                ->withInput()
                ->with('flash', 'Ese inventario no existe en el Almacen Central.');
        }

        // Si existe el inventario
        foreach ($inventario as $cantidad) {
            $total1 = $cantidad->cantidad_total;
            $id_inv = $cantidad->id_inventario;
        }
        
        // Si $total es MENOR a la cantidad que se quiere mover salta error
        if ($total1 < $request->cantidad) {
            return redirect()->action('MovimientoInsumoController@create')
                ->withInput()
                ->with('flash', 'No se puede mover una cantidad que no existe en el Almacen Central.');
        }

        // Si existe inventario se resta la cantidad que se va a mover a lo que tiene el almacen central
        $total1 = $total1 - $request->cantidad;
        $insumo = Inventario::find($id_inv);
        $insumo->cantidad_total = $total1;
        $insumo->save();

        $asignacion = new MovimientoInsumo();
        $asignacion->almacen_id  = $request->almacen;
        $asignacion->tipo_insumo_id = $request->tipo_insumo;
        $asignacion->marca_id = $request->marca_insumos;
        $asignacion->insumos_id = $request->det_insumo;
        $asignacion->medida_id = $request->medida;
        $asignacion->cantidad_movida = $request->cantidad;
        $asignacion->numero_orden = $request->num_orden;
        $asignacion->save();

        // CONSULTA SI HAY ESE INSUMO EN EL ALMACEN 
        $consulta = Inventario::where([['almacen_id', $request->almacen], ['marca_id', $request->marca_insumos], ['insumos_id', $request->det_insumo], ['medida_id', $request->medida]])->get();

        // Si existe en ese almacen
        if (!$consulta->isEmpty()) {
            foreach ($consulta as $cantidad) {
                $total = $cantidad->cantidad_total;
                $id_inv = $cantidad->id_inventario;
            }

            $total = $total + $request->cantidad;
            $insumo = Inventario::find($id_inv);
            $insumo->cantidad_total = $total;
            $insumo->save();    
            return redirect()->action('MovimientoInsumoController@index')->with('flash', 'Los Insumos fueron movidos de almacen exitosamente.');
        }

        $insumo = new Inventario();
        $insumo->almacen_id  = $request->almacen;
        $insumo->tipo_insumo_id = $request->tipo_insumo;
        $insumo->marca_id = $request->marca_insumos;
        $insumo->insumos_id = $request->det_insumo;
        $insumo->medida_id = $request->medida;
        $insumo->cantidad_total = $request->cantidad;
        $insumo->save();
        
        return redirect()->action('MovimientoInsumoController@index')->with('flash', 'Los Insumos fueron movidos de almacen exitosamente.');
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

    /* SELECTS DINAMICOS PARA MOVIMIENTO DE INVENTARIO */
    public function cauchos(Request $request)
    {
        $data = DB::table('detalle_insumos')
                            ->join('inventarios', 'inventarios.insumos_id', '=', 'detalle_insumos.id_detalle_insumo')
                            ->select('detalle_insumos.nom_detalle_insumo', 'detalle_insumos.id_detalle_insumo')
                            ->where([['detalle_insumos.tipo_insumo_id',$request->id_detalle_insumo], ['inventarios.almacen_id', [1]]])
                            ->get();
        return response()->json($data);
    }

    public function baterias(Request $request)
    {
        $data = DB::table('detalle_insumos')
                            ->join('inventarios', 'inventarios.insumos_id', '=', 'detalle_insumos.id_detalle_insumo')
                            ->select('detalle_insumos.nom_detalle_insumo', 'detalle_insumos.id_detalle_insumo')
                            ->where([['detalle_insumos.tipo_insumo_id',$request->id_detalle_insumo], ['inventarios.almacen_id', [1]]])
                            ->get();
        return response()->json($data);
    }

    public function aceites(Request $request)
    {
        $data = DB::table('detalle_insumos')
                            ->join('inventarios', 'inventarios.insumos_id', '=', 'detalle_insumos.id_detalle_insumo')
                            ->select('detalle_insumos.nom_detalle_insumo', 'detalle_insumos.id_detalle_insumo')
                            ->where([['detalle_insumos.tipo_insumo_id',$request->id_detalle_insumo], ['inventarios.almacen_id', [1]]])
                            ->get();
        return response()->json($data);
    }

    public function marcasInsumo(Request $request)
    {
        $data = DB::table('marca_insumos')
                            ->join('inventarios', 'inventarios.marca_id', '=', 'marca_insumos.id_marca_insumo')
                            ->select('marca_insumos.nom_marca_insumo', 'marca_insumos.id_marca_insumo')
                            ->where([['marca_insumos.tipo_insumo_id', $request->id_marca_insumo], ['inventarios.almacen_id', [1]]])
                            ->get();
        return response()->json($data);
    }
}
