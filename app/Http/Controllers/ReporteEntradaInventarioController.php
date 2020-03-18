<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\AgregarInsumo;
use PDF;

class ReporteEntradaInventarioController extends Controller
{
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
        return view('reportes.inventario.entradaInventario');
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

    public function pdfEntrada(Request $request)
    {
        $insumos = AgregarInsumo::where([['fecha_inven', '>=', $request->start_date], ['fecha_inven', '<=', $request->end_date]])->orderBy('fecha_inven', 'ASC')->get();
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $total = 0;
        foreach ($insumos as $insum) {
            $total = $total + $insum->cantidad_agreg;
        }
        $pdf = PDF::loadView('reportes.pdf.entradaInventario', compact('insumos', 'start_date', 'end_date', 'total'));
        return $pdf->stream(); // Aqui muestra el pdf
        //return $pdf->download('entrada_inventario.pdf'); // Aqui descarga el pdf
    }
}
