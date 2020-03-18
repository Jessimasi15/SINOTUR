<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\Estado;
use Sinotur\TipoOrganizacion;
use Sinotur\Bloque;
use Sinotur\Organizacion;
use Sinotur\Http\Requests\OrganizacionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class OrganizacionController extends Controller
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
    // ** View Listado de Organizaciones **
    public function index(Request $request)
    {
        $rif = $request->get('rif_organizacion');

        $organizaciones = Organizacion::orderBy('rif_organizacion', 'ASC')
                ->rif($rif)
                ->paginate(5);
        return view('organizaciones.organizaciones')->with('organizaciones', $organizaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ** View Registro de Organizaciones **
    public function create()
    {
        $estados = Estado::all();
        $torganizaciones = TipoOrganizacion::all();
        $bloques = Bloque::all();
        return view('organizaciones.formularioOrganizacion', compact('estados', 'torganizaciones', 'bloques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // ** Guardar datos View Registro de Organizaciones **
    public function store(OrganizacionRequest $request)
    {
        $organizacion = new Organizacion();
        $organizacion->tipo_empresa = $request->tipo_empresa;
        $organizacion->servicio = $request->servicio;
        $organizacion->institucional = $request->institucional;
        $organizacion->rif_organizacion = Str::upper($request->rif_org);
        $organizacion->nom_organizacion = Str::upper($request->nom_org);
        $organizacion->tipo_organ_id = $request->tipo_organ;
        $organizacion->ci_presidente = $request->ci_presi;
        $organizacion->nom_presidente = Str::upper($request->nom_presi);
        $organizacion->apell_presidente = Str::upper($request->apell_presi);
        $organizacion->correo_organ = Str::upper($request->email_org);
        $organizacion->telef_local = $request->telf_local;
        $organizacion->telef_celular = $request->telf_cel;
        $organizacion->estado_id = $request->estado;
        $organizacion->munic_id = $request->municipio;
        $organizacion->parroq_id = $request->parroquia;
        $organizacion->bloque_id = $request->bloque;
        $organizacion->ruta_organ = Str::upper($request->ruta_org);
        $organizacion->direc_organ = Str::upper($request->direc_org);
        $organizacion->save();
        //return $request->all(); 
        return redirect()->action('OrganizacionController@index')
            ->withInput()
            ->with('flash', 'La Organizacion fue agregada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rif_organizacion)
    {
        $organizacion = Organizacion::find($rif_organizacion);
        return view('organizaciones.showOrganizacion', compact('organizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Editar Organizacion
    public function edit(Request $request, $rif_organizacion)
    {
        $request->user()->authorizeRoles('admin');
        $organizacion = Organizacion::find($rif_organizacion);
        $estados = Estado::all();
        $torganizaciones = TipoOrganizacion::all();
        $bloques = Bloque::all();
        return view('organizaciones.editOrganizacion', compact('organizacion', 'estados', 'torganizaciones', 'bloques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Actualizar Organizacion
    public function update(Request $request, $rif_organizacion)
    {
        $organizacion = Organizacion::find($rif_organizacion);
        if ($request->tipo_organ === '0') {
            return redirect()->action('OrganizacionController@edit', $organizacion->rif_organizacion)->with('alert', 'Llene toda la información para poder actualizar.');
        }

        if ($request->bloque === '0') {
            return redirect()->action('OrganizacionController@edit', $organizacion->rif_organizacion)->with('alert', 'Llene toda la información para poder actualizar.');
        }
        $organizacion->tipo_organ_id = $request->tipo_organ;
        $organizacion->ci_presidente = $request->ci_presi;
        $organizacion->nom_presidente = Str::upper($request->nom_presi);
        $organizacion->apell_presidente = Str::upper($request->apell_presi);
        $organizacion->correo_organ = Str::upper($request->email_org);
        $organizacion->telef_local = $request->telf_local;
        $organizacion->telef_celular = $request->telf_cel;
        $organizacion->bloque_id = $request->bloque;
        $organizacion->ruta_organ = Str::upper($request->ruta_org);
        $organizacion->direc_organ = Str::upper($request->direc_org);
        $organizacion->save();
        return redirect()->action('OrganizacionController@show', $organizacion->rif_organizacion)->with('flash', 'La Organización fue actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Eliminar Organizacion
    public function destroy(Request $request, $rif_organizacion)
    {
        $request->user()->authorizeRoles('admin');
        $organizacion = Organizacion::find($rif_organizacion);
        $organizacion->delete();
        return redirect()->action('OrganizacionController@index')->with('flash', 'La Organización fue eliminada de manera exitosa.');;
    }
}
