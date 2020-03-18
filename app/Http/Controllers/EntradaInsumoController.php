<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\TipoInsumo;
use Sinotur\Almacen;
use Sinotur\UnidadMedida;
use Sinotur\DetalleInsumo;
use Sinotur\MarcaInsumo;
use Sinotur\AgregarInsumo;
use Sinotur\Inventario;
use Sinotur\Http\Requests\AgregarInsumosRequest;

class EntradaInsumoController extends Controller
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
        $almacen = $request->get('almacen');
        $tinsumos = $request->get('tipo_insumo');

        $insumos = Inventario::whereNotIn('cantidad_total', ['0'])->orderBy('almacen_id', 'ASC')
                ->almacen($almacen)
                ->tipo($tinsumos)
                ->paginate(10);
        return view('inventario.entradaInsumo.index')->with('insumos',$insumos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $tinsumos = TipoInsumo::all();
        $almacenes = Almacen::select('nom_almacen', 'id_almacen')->where('id_almacen', '1')->get();
        //return view('inventario.entradaInsumo.entradaDinamico', compact('tinsumos', 'almacenes'));
        return view('inventario.entradaInsumo.entradaInsumos', compact('tinsumos', 'almacenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgregarInsumosRequest $request)
    {
        $inventario = Inventario::where([['almacen_id', '1'], ['marca_id', $request->marca_insumos], ['insumos_id', $request->det_insumo], ['medida_id', $request->medida]])->get();
        $cantidad = $request->cantidad;

        $insumo = new AgregarInsumo();
        $insumo->numero_orden = $request->num_orden;
        $insumo->fecha_desp = $request->fecha_desp;
        $insumo->fecha_inven = $request->fecha_inven;
        $insumo->almacen_id = $request->nom_almacen;
        $insumo->tipo_insumo_id = $request->tipo_insumo;
        $insumo->marca_id = $request->marca_insumos;
        $insumo->insumos_id = $request->det_insumo;
        $insumo->medida_id = $request->medida;
        $insumo->cantidad_agreg = $request->cantidad;
        $insumo->monto_compra = $request->monto_compra;
        $insumo->ganancia = $request->ganancia;
        $insumo->monto_venta = $request->monto_venta;
        $insumo->save();
        
        // Si existe $inventario lo que hace es actualizar la cantidad
        if (!$inventario->isEmpty()) {
            foreach ($inventario as $cant) {
                $detalle = $cant->cantidad_total;
                $id_inv = $cant->id_inventario;
            }
            $detalle = $cantidad + $detalle;
            
            $insumo = Inventario::find($id_inv);
            $insumo->cantidad_total = $detalle;
            $insumo->save();
            return redirect()->action('EntradaInsumoController@index')->with('flash', 'Los Insumos fueron agregados exitosamente.');
        }
        
        // Si no existe $inventario se agrega uno nuevo
        $insumo = new Inventario();
        $insumo->almacen_id = $request->nom_almacen;
        $insumo->tipo_insumo_id = $request->tipo_insumo;
        $insumo->marca_id = $request->marca_insumos;
        $insumo->insumos_id = $request->det_insumo;
        $insumo->medida_id = $request->medida;
        $insumo->cantidad_total = $request->cantidad;
        $insumo->save();
        //return $request->all();
        return redirect()->action('EntradaInsumoController@index')->with('flash', 'Los Insumos fueron agregados exitosamente.');
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

    /* SELECTS DINAMICOS */ 
    // Selects Dinamicos Medida - Detalle de Tipo de Insumo
    public function medida(Request $request)
    {
        $data = UnidadMedida::select('nom_medida','id_medida')->where('id_tipo_insumo',$request->id_medida)->get();
        return response()->json($data);
    }

    public function insumosCaucho(Request $request)
    {
        $data = DetalleInsumo::select('nom_detalle_insumo','id_detalle_insumo')->where('tipo_insumo_id',$request->id_detalle_insumo)->get();
        return response()->json($data);
    }

    public function insumosBateria(Request $request)
    {
        $data = DetalleInsumo::select('nom_detalle_insumo','id_detalle_insumo')->where('tipo_insumo_id',$request->id_detalle_insumo)->get();
        return response()->json($data);
    }

    public function insumosAceite(Request $request)
    {
        $data = DetalleInsumo::select('nom_detalle_insumo','id_detalle_insumo')->where('tipo_insumo_id',$request->id_detalle_insumo)->get();
        return response()->json($data);
    }

    public function marcas(Request $request)
    {
        $data = MarcaInsumo::select('nom_marca_insumo','id_marca_insumo')->where('tipo_insumo_id',$request->id_marca_insumo)->get();
        return response()->json($data);
    }
}
