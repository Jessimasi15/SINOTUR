<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JornadaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha_jorn' => 'required',
            'nom_jorn' => 'required|string|max:50',
            'estado' => 'required|exists:estados,id_estado',
            'almacen' => 'required|exists:almacens,id_almacen',
            'direc_jorn' => 'required|string|max:200',
            'rif_empresa' => 'required',
            'ci_resp_jorn' => 'required',
            'nom_apell_resp' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fecha_jorn.required' => 'El :attribute es obligatorio.',

            'nom_jorn.required' => 'El :attribute es obligatorio.',
            'nom_jorn.string' => 'El :attribute tiene que ser alfanúmerico.',
            'nom_jorn.max' => 'El :attribute debe contener máximo 50 caracteres.',
            'nom_jorn.unique' => 'El :attribute ya existe.',

            'estado.required' => 'El :attribute es obligatorio.',

            'almacen.required' => 'El :attribute es obligatorio.',

            'direc_jorn.required' => 'El :attribute es obligatorio.',
            'direc_jorn.string' => 'El :attribute tiene que ser alfanúmerico.',
            'direc_jorn.max' => 'El :attribute debe contener máximo 200 caracteres.',

            'rif_empresa.required' => 'El :attribute es obligatorio.',

            'ci_resp_jorn.required' => 'El :attribute es obligatorio.',

            'nom_apell_resp.required' => 'El :attribute es obligatorio.',
        ];
    }

    public function attributes()
    {
        return [
            'fecha_jorn' => 'Fecha de la Jornada',
            'nom_jorn' => 'Nombre de la Jornada',
            'estado' => 'Estado',
            'almacen' => 'Almacén',
            'direc_jorn' => 'Dirección de la Jornada',
            'rif_empresa' => 'Rif Empresa',
            'ci_resp_jorn' => 'C.I. Responsable',
            'nom_apell_resp' => 'Nombre y Apellido Responsable',
        ];
    }
}
