<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\Jornada;
use Sinotur\CierreOperativo;
use Sinotur\Inventario;
use Sinotur\Http\Requests\CierreOperativoRequest;

class CierreOperativoController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operativos = Jornada::where('estatus', 'ABIERTA')->get();
        return view('jornada.cierre.cierreOperativo', compact('operativos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CierreOperativoRequest $request)
    {
        // CONSULTA DE LO QUE HAY EN EL ALMACEN DE ESA JORNADA
        $jornada = Jornada::select('almacen_id')->where('id_jornada', $request->nom_jorn)->get();
        foreach ($jornada as $jorn) {
            $almacen = $jorn->almacen_id;
        }
        $consulta = Inventario::where('almacen_id', $almacen)->get();
        foreach ($consulta as $consul) {
            $id_inv = $consul->id_inventario;
            $marca = $consul->marca_id;
            $insumos = $consul->insumos_id;
            $medida = $consul->medida_id;
            $cantidad = $consul->cantidad_total;
            $total1 = $consul->cantidad_total;
            //$consultar = Inventario::where([['marca_id', $marca], ['insumos_id', $insumos]])->get();
            
            if ($cantidad > '0') {
                $consultar = Inventario::where([['almacen_id', '1'], ['marca_id', $marca], ['insumos_id', $insumos], ['medida_id', $medida]])->get();
                foreach ($consultar as $ret) {
                    $id_central = $ret->id_inventario;
                    $total = $ret->cantidad_total;
                }
                $total = $total + $cantidad;
                $retornar = Inventario::find($id_central);
                $retornar->cantidad_total = $total;
                $retornar->save();

                $total1 = $total1 - $cantidad;
                $devuelto = Inventario::find($id_inv);
                $devuelto->cantidad_total = $total1;
                $devuelto->cantidad_asignada = $total1;
                $devuelto->save();
            }
        }
        
        $cierre = new CierreOperativo();
        $cierre->jornada_id = $request->nom_jorn;
        $cierre->save();

        $cerrar = $request->nom_jorn;

        $jornada = Jornada::find($cerrar);
        $jornada->estatus = 'CERRADA';
        $jornada->save();
        
        return redirect()->action('OperativoController@index')->with('flash', 'Cierre de operativo exitoso.');
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
