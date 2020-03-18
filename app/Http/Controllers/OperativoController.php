<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\Estado;
use Sinotur\Almacen;
use Sinotur\Jornada;
use Sinotur\Http\Requests\JornadaRequest;
use Illuminate\Support\Str;

class OperativoController extends Controller
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
    public function index(Request $request) // Revisar
    {
        $fecha = $request->get('fecha_jornada');
        $jornada = $request->get('jornada');

        $jornadas = Jornada::orderBy('fecha_jornada', 'DESC')
                ->fecha($fecha)
                ->jornada($jornada)
                ->paginate(10);
        return view('jornada.creacion.jornadas', compact('jornadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // View Crear Jornada
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $estados = Estado::all();
        return view('jornada.creacion.crearJornada', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Guardar datos del formulario de la View Crear Jornada
    public function store(JornadaRequest $request)
    {
        $jornada = new Jornada();
        $jornada->fecha_jornada = $request->fecha_jorn;
        $jornada->nom_jornada = Str::upper($request->nom_jorn);
        $jornada->estado_id = $request->estado;
        $jornada->almacen_id = $request->almacen;
        $jornada->direc_jornada = Str::upper($request->direc_jorn);
        $jornada->rif_empresa = Str::upper($request->rif_empresa);
        $jornada->ci_resp_jorn = $request->ci_resp_jorn;
        $jornada->nom_apell_resp = Str::upper($request->nom_apell_resp);
        $jornada->estatus = 'ABIERTA';
        $jornada->save();
        //return $request->all();
        return redirect()->action('OperativoController@index')->with('flash', 'La Jornada fue creada exitosamente.');
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

    public function almacen(Request $request)
    {
        $data = Almacen::select('nom_almacen','id_almacen')->where('estado_id',$request->id_almacen)->whereNotIn('id_almacen', [1])->get();
        return response()->json($data);
    }
}
