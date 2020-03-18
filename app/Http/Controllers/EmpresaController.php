<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\EstatusEmpresa;
use Sinotur\Empresa;
use Sinotur\Http\Requests\EmpresaRequest;
use Sinotur\Http\Requests\SucursalRequest;
use Sinotur\Sucursal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /* NO SE USARA
	// View Agregar Empresa
    public function empresa()
    {
    	$estatus = EstatusEmpresa::all();
    	return view('empresa.agregarEmpresa', compact('estatus'));
    }

    // Guardar datos de View Agregar Empresa
    public function creacionEmpresa(EmpresaRequest $request)
    {
        $empresa = new Empresa();
        $empresa->rif_empresa = $request->rif_empresa;
        $empresa->nom_empresa = $request->nom_empresa;
        $empresa->telef_empresa = $request->telef_empresa;
        $empresa->correo_empresa = $request->correo_empresa;
        $empresa->sitio_web = $request->sitio_web;
        $empresa->estatus_id = $request->estatus;
        $empresa->twitter = $request->twitter;
        $empresa->instagram = $request->instagram;
        $empresa->facebook = $request->facebook;
        $empresa->direc_empresa = $request->direc_emp;
        $empresa->save();
        //return $request->all(); 
        return redirect()->route('empresa')->with('flash', 'La Empresa fue agregada exitosamente.');
    }*/

    // View Agregar Sucursal
    public function sucursal()
    {
        $empresas = Empresa::all();
    	return view('empresa.agregarSucursal', compact('empresas'));
    }

    // Guardar datos de View Agregar Sucursal
    public function creacionSucursal(SucursalRequest $request)
    {
        $sucursal = new Sucursal();
        $sucursal->empresa_rif = $request->empresa;
        $sucursal->nom_coord = Str::upper($request->nom_coord);
        $sucursal->telef_coord = $request->telef_coord;
        $sucursal->direc_coord = Str::upper($request->direc_coord);

        $sucursal->save();
        //return $request->all(); 
        return redirect()->route('sucursal')
            ->withInput()
            ->with('flash', 'La Coordinacion fue agregada exitosamente.');
    }
}
