<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\Jornada;
use PDF;

class ReporteJornadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.operativo.reporteJornadas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportes.operativo.jornadas');
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

    public function pdfJornada(Request $request)
    {
        $jornadas = Jornada::where([['fecha_jornada', '>=', $request->start_date], ['fecha_jornada', '<=', $request->end_date]])
            ->orderBy('fecha_jornada', 'ASC')
            ->get();
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $pdf = PDF::loadView('reportes.pdf.jornadas', compact('jornadas', 'start_date', 'end_date'));
        return $pdf->stream(); // Aqui muestra el pdf
        //return $pdf->download('inventario.pdf'); // Aqui descarga el pdf
    }
}
