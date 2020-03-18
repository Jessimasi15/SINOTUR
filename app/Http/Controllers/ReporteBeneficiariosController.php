<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\AsignarBeneficiario;
use Sinotur\Jornada;
use PDF;

class ReporteBeneficiariosController extends Controller
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
        $jornadas = Jornada::all();
        return view('reportes.operativo.beneficiariosAsignados', compact('jornadas'));
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

    public function pdfBeneficiarios(Request $request)
    {
        $jornada = $request->get('jornada');
        $beneficiarios = AsignarBeneficiario::orderBy('placa', 'ASC')->jornada($jornada)->get();
        //$beneficiarios = AsignarBeneficiario::where('jornada_id', $request->jornada)->orderBy('placa', 'ASC')->get();
        $total = 0;
        foreach ($beneficiarios as $benef) {
            $id_jorn = $benef->jornada_id;
            $total = $total + $benef->cantidad_entregar;
        }
        
        if ($beneficiarios->isEmpty()) {
            return redirect()->back()->with('alert', 'No hay beneficiarios asignados para esta jornada.');
        }

        $jornada = Jornada::find($id_jorn);
        //$pdf = PDF::loadView('reportes.pdf.beneficiariosJornada', compact('beneficiarios', 'start_date', 'end_date'));
        $pdf = PDF::loadView('reportes.pdf.beneficiariosJornada', compact('beneficiarios', 'jornada', 'total'));
        return $pdf->stream(); // Aqui muestra el pdf
        //return $pdf->download('inventario.pdf'); // Aqui descarga el pdf
    }
}
