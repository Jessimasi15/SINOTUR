<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Sinotur\Estado;
use Sinotur\Municipio;
use Sinotur\Parroquia;
use Sinotur\MarcaVehiculo;
use Sinotur\ModeloVehiculo;
use Sinotur\Color;
use Sinotur\TipoBeneficiario;
use Sinotur\Organizacion;
use Sinotur\Beneficiario;
use Sinotur\Vehiculo;
use Sinotur\Bloque;
use Sinotur\Http\Requests\BeneficiarioRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class BeneficiarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /* BENEFICIARIOS */
    // View Listado Beneficiarios
    public function index(Request $request)
    {
        $ci = $request->get('ci_beneficiario');
        $rif = $request->get('rif_organizacion');

        $beneficiarios = Beneficiario::orderBy('ci_beneficiario', 'ASC')
                ->cedula($ci)
                ->rif($rif)
                ->paginate(10);
        return view('beneficiarios.listBeneficiarios')->with('beneficiarios', $beneficiarios);
    }

    // View Registro de Beneficiarios
    public function create()
    {
        $estados = Estado::all();
        $t_beneficiarios = TipoBeneficiario::all();
        return view('beneficiarios.formularioBeneficiario', compact('estados', 't_beneficiarios'));
    }

    // Guardar datos View Registro de Beneficiarios
    public function store(BeneficiarioRequest $request)
    {
        $beneficiario = new Beneficiario();
        $beneficiario->ci_beneficiario = $request->ci_benef;
        $beneficiario->organizacion_rif = Str::upper($request->rif_org);
        $beneficiario->nom_benef = Str::upper($request->nom_benef);
        $beneficiario->apell_benef = Str::upper($request->apell_benef);
        $beneficiario->tipo_benef_id = $request->tipo_benef;
        $beneficiario->estado_id = $request->estado;
        $beneficiario->munic_id = $request->municipio;
        $beneficiario->parroq_id = $request->parroquia;
        $beneficiario->telef_benef = $request->telf;
        $beneficiario->correo_benef = Str::upper($request->email_benef);
        $beneficiario->direc_benef = Str::upper($request->direc_benef);
        $beneficiario->save();
        //return $request->all();
        return redirect()->action('BeneficiarioController@create')
            ->withInput()
            ->with('flash', 'El Beneficiario fue agregado exitosamente.');
    }

    // Ver un Beneficiario en especifico
    public function show($ci_beneficiario)
    {
        $beneficiario = Beneficiario::find($ci_beneficiario);
        $vehiculos = Vehiculo::where('benef_ci', $ci_beneficiario)->get();
        return view('beneficiarios.beneficiario', compact('beneficiario', 'vehiculos'));
    }

    // Editar Beneficiario
    public function edit(Request $request, $ci_beneficiario)
    {
        $request->user()->authorizeRoles('admin');
        $beneficiario = Beneficiario::find($ci_beneficiario);
        $t_beneficiarios = TipoBeneficiario::all();
        $colores = Color::all();
        $estados = Estado::all();
        return view('beneficiarios.editBeneficiario', compact('beneficiario', 'colores', 't_beneficiarios', 'estados'));
    }

    // Actualizar Beneficiario
    public function update(Request $request, $ci_beneficiario)
    {
        $beneficiario = Beneficiario::find($ci_beneficiario);
        if ($request->tipo_benef === '0') {
            return redirect()->action('BeneficiarioController@edit', $beneficiario->ci_beneficiario)->with('alert', 'Llene toda la información para poder actualizar.');
        }

        if ($request->estado === '0') {
            return redirect()->action('BeneficiarioController@edit', $beneficiario->ci_beneficiario)->with('alert', 'Llene toda la información para poder actualizar.');
        }
        
        $beneficiario->organizacion_rif = Str::upper($request->rif_org);
        $beneficiario->tipo_benef_id = $request->tipo_benef;
        $beneficiario->estado_id = $request->estado;
        $beneficiario->munic_id = $request->municipio;
        $beneficiario->parroq_id = $request->parroquia;
        $beneficiario->telef_benef = $request->telf;
        $beneficiario->correo_benef = Str::upper($request->email_benef);
        $beneficiario->direc_benef = Str::upper($request->direc_benef);
        $beneficiario->save();
        return redirect()->action('BeneficiarioController@show', $beneficiario->ci_beneficiario)->with('flash', 'El Beneficiario fue actualizado exitosamente.');
    }

    // Eliminar Beneficiarios
    public function destroy(Request $request, $ci_beneficiario)
    {
        $request->user()->authorizeRoles('admin');
        $beneficiario = Beneficiario::find($ci_beneficiario);
        $beneficiario->delete();
        return redirect()->action('BeneficiarioController@index')->with('flash', 'El Beneficiario fue eliminado exitosamente.');
    }
    

    /* LISTAS DESPLEGABLES */
    // Selects Dinamicos Municipio - Parroquia
    public function municipio(Request $request){

        // si nuestra id y tabla de estados elegidos estado_id col coinciden con los primeros 400 datos

        // $ request-> id aquí es el id de nuestra opción elegida id
        $data = Municipio::select('nom_munic','id_munic')->where('estado_id',$request->id_munic)->get();
        return response()->json($data);//A continuación, envió estos datos para el éxito de Ajax
    }

    public function parroquia(Request $request){

        $data = Parroquia::select('nom_parroq','id_parroq')->where('munic_id',$request->id_parroq)->get();
        return response()->json($data);
    }

    public function modelos(Request $request){

        $data = ModeloVehiculo::select('nom_modelo','id_modelo')->where('marca_id',$request->id_modelo)->get();
        return response()->json($data);
    }

}
