<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\Almacen;
use Sinotur\Estado;
use Sinotur\Http\Requests\AlmacenRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class AlmacenController extends Controller
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
    // Listado de Almacenes
    public function index(Request $request)
    {
        $almacen = $request->get('nom_almacen');

        $almacenes = Almacen::orderBy('id_almacen', 'ASC')
                ->almacen($almacen)
                ->paginate(15);
        return view('almacen.consultaAlmacen')->with('almacenes', $almacenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Crear Almacen
    public function create()
    {
        $estados = Estado::all();
        return view('almacen.crear_almacen', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Guardar Almacen creado
    public function store(AlmacenRequest $request)
    {
        $almacen = new Almacen();
        $almacen->nom_almacen = Str::upper($request->nom_almacen);
        $almacen->estado_id = $request->estado;
        $almacen->direc_almacen = Str::upper($request->direc_almacen);
        $almacen->save();
        //return $request->all(); 
        return redirect()->action('AlmacenController@index')
            ->withInput()
            ->with('flash', 'El Almacen fue creado exitosamente.');
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
    // Eliminar Almacen
    public function destroy(Request $request, $id_almacen)
    {
        $request->user()->authorizeRoles('admin');
        $almacen = Almacen::find($id_almacen);

        if ($id_almacen === '1') {
            abort(401, 'Esta acción no está autorizada');
        }

        $almacen->delete();
        return redirect()->action('AlmacenController@index')->with('flash', 'El Almacen fue eliminado exitosamente.');
    }
}
