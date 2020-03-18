<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\Estado;
use Sinotur\TipoInsumo;
use Sinotur\Jornada;
use Sinotur\Inventario;
use Sinotur\CierreOperativo;
use Sinotur\AsignarBeneficiario;
use Sinotur\Http\Requests\AsignarBeneficiarioRequest;
use DB;
use Illuminate\Support\Str;

class OperativoBeneficiarioController extends Controller
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
        $placa = $request->get('placa');
        $jornada = $request->get('jornada');

        $asignaciones = AsignarBeneficiario::orderBy('jornada_id', 'DESC')
                ->placa($placa)
                ->jornada($jornada)
                ->paginate(15);
        return view('jornada.asignacion.beneficiariosAsignados', compact('asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // View Asignar Beneficiario a Operativo
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $estados = Estado::all();
        $tinsumos = TipoInsumo::all();
        $jornadas = Jornada::where('estatus', 'ABIERTA')->get();
        return view('jornada.asignacion.asignarBeneficiario', compact('estados', 'tinsumos', 'jornadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsignarBeneficiarioRequest $request)
    {
        // CONSULTA DE LO QUE HAY EN EL ALMACEN DE ESA JORNADA
        $jornada = Jornada::select('almacen_id')->where('id_jornada', $request->jornada)->get();
        foreach ($jornada as $jorn) {
            $almacen = $jorn->almacen_id;
        }
        $consulta = Inventario::where([['almacen_id', $almacen], ['insumos_id', $request->det_insumo], ['medida_id', $request->medida]])->get();
        // No existe ese insumo en ese almacen
        if ($consulta->isEmpty()) {
            //return 'No hay ese insumo en el almacen asignado para esta jornada';
            return redirect()->action('OperativoBeneficiarioController@create')->with('alert', 'No hay ese insumo en el almacen asignado para esta jornada.');
        }
        // Si existe ese insumo en este almacen
        foreach ($consulta as $cons) {
            $id_inv = $cons->id_inventario;
            $cantidad = $cons->cantidad_total;
            $total = $cons->cantidad_asignada;
        }

        $consultar = AsignarBeneficiario::where([['jornada_id', $request->jornada], ['placa', $request->placa], ['insumos_id', $request->det_insumo], ['medida_id', $request->medida]])->get();
        //Si No existe ese asignacion de beneficiario
        if (!$consultar->isEmpty()) {
            //return 'A este Beneficiario ya se le asigno este insumo';
            return redirect()->action('OperativoBeneficiarioController@create')->with('alert', 'A este Beneficiario ya se le asigno este insumo.');
        }

        // Comprobar si la cantidad que se quiere asignar es mejor al total existente en el almacen
        if ($cantidad < $request->cantidad) {
            //return 'No se puede asignar una cantidad mayor a la existente en el almacen';
            return redirect()->action('OperativoBeneficiarioController@index')->with('alert', 'No se puede asignar una cantidad mayor a la existente en el almacen asignado para esta jornada.');
        }

        // Comprobar si la cantidad es igual al total
        if ($cantidad === $total) {
            return redirect()->action('OperativoBeneficiarioController@index')->with('alert', 'La cantidad de insumos asignados ya llegó al máximo de la cantidad total existente en el almacen para esta jornada.');
        }

        // Comprobar si cantidad total es mayor que el total que se le quiere asignar
        if ($cantidad > $total) {
            $total = $total + $request->cantidad;
            // Comprobar que total no sea mayor a la cantidad total existente en el almacen
            if ($cantidad < $total) {
                return redirect()->action('OperativoBeneficiarioController@index')->with('alert', 'No se puede asignar una cantidad mayor a la existente en el almacen para esta jornada.');
            }

            $asignacion = new AsignarBeneficiario();
            $asignacion->jornada_id = $request->jornada;
            $asignacion->placa = Str::upper($request->placa);
            $asignacion->tipo_insumo_id = $request->tipo_insumo;
            $asignacion->insumos_id = $request->det_insumo;
            $asignacion->medida_id = $request->medida;
            $asignacion->cantidad_entregar = $request->cantidad;
            $asignacion->estatus = 'NO ENTREGADO';
            $asignacion->save();
            //return $request->all();

            $insumo = Inventario::find($id_inv);
            $insumo->cantidad_asignada = $total;
            $insumo->save();
        
            return redirect()->action('OperativoBeneficiarioController@index')->with('flash', 'La Asignacion de Beneficiario fue exitosa.');
        }

        // Comprobar si cantidad total es menor que el total que se le quiere asignar
        if ($cantidad < $total) {
            //return 'La cantidad de insumos asignados sobrepasa la cantidad total existente en el almacen';
            return redirect()->action('OperativoBeneficiarioController@index')->with('alert', 'La cantidad de insumos asignados sobrepasa la cantidad total existente en el almacen asignado para esta jornada.');
        }

        
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

    /* SELECTS DINAMICOS PARA ASIGNACION DE BENEFICIARIOS A JORNADA */
    public function caucho(Request $request)
    {   
        $jornada = Jornada::select('almacen_id')->where('id_jornada', $request->jornada)->get();
        foreach ($jornada as $alm) {
            $almacen = $alm->almacen_id;
        }
        $data = DB::table('detalle_insumos')
                            ->join('inventarios', 'inventarios.insumos_id', '=', 'detalle_insumos.id_detalle_insumo')
                            ->select('detalle_insumos.nom_detalle_insumo', 'detalle_insumos.id_detalle_insumo')
                            ->where('detalle_insumos.tipo_insumo_id',$request->id_detalle_insumo)
                            ->where('inventarios.almacen_id', $almacen)
                            //->whereNotIn('inventarios.almacen_id', [1])
                            ->get();
        return response()->json($data);
    }

    public function bateria(Request $request)
    {
        $jornada = Jornada::select('almacen_id')->where('id_jornada', $request->jornada)->get();
        foreach ($jornada as $alm) {
            $almacen = $alm->almacen_id;
        }
        $data = DB::table('detalle_insumos')
                            ->join('inventarios', 'inventarios.insumos_id', '=', 'detalle_insumos.id_detalle_insumo')
                            ->select('detalle_insumos.nom_detalle_insumo', 'detalle_insumos.id_detalle_insumo')
                            ->where('detalle_insumos.tipo_insumo_id',$request->id_detalle_insumo)
                            ->where('inventarios.almacen_id', $almacen)
                            //->whereNotIn('inventarios.almacen_id', [1])
                            ->get();
        return response()->json($data);
    }

    public function aceite(Request $request)
    {
        $jornada = Jornada::select('almacen_id')->where('id_jornada', $request->jornada)->get();
        foreach ($jornada as $alm) {
            $almacen = $alm->almacen_id;
        }
        $data = DB::table('detalle_insumos')
                            ->join('inventarios', 'inventarios.insumos_id', '=', 'detalle_insumos.id_detalle_insumo')
                            ->select('detalle_insumos.nom_detalle_insumo', 'detalle_insumos.id_detalle_insumo')
                            ->where('detalle_insumos.tipo_insumo_id',$request->id_detalle_insumo)
                            ->where('inventarios.almacen_id', $almacen)
                            //->whereNotIn('inventarios.almacen_id', [1])
                            ->get();
        return response()->json($data);
    }
}
