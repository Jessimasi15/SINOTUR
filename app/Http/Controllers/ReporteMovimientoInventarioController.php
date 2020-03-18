<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\MovimientoInsumo;
use PDF;

class ReporteMovimientoInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //NO
    {
        $insumos = MovimientoInsumo::orderBy('created_at', 'DESC')->paginate(10);
        return view('reportes.inventario.movimientoInventario', compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportes.inventario.movimientoInventario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function pdfMovimiento(Request $request)
    {
        $insumos = MovimientoInsumo::whereDate('created_at', '>=', $request->start_date)
                                    ->whereDate('created_at', '<=', $request->end_date)
                                    ->orderBy('created_at', 'ASC')
                                    ->get();
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $total = 0;
        foreach ($insumos as $insum) {
            $total = $total + $insum->cantidad_movida;
        }
        $pdf = PDF::loadView('reportes.pdf.movimientoInventario', compact('insumos', 'start_date', 'end_date', 'total'));
        return $pdf->stream(); // Aqui muestra el pdf
        //return $pdf->download('entrada_inventario.pdf'); // Aqui descarga el pdf
    }
}
