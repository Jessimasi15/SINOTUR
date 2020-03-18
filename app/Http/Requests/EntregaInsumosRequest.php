<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntregaInsumosRequest extends FormRequest
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
            'jornada' => 'required|exists:jornadas,id_jornada',
            'placa' => 'required',
            /*'ci_benef' => 'required|exists:beneficiarios,ci_beneficiario',
            'rif_org' => 'required|exists:organizacions,rif_organizacion',
            'tipo_vehic' => 'required|exists:tipo_vehiculos,id_tipo_vehiculo',
            'serial_carr' => 'required|string',
            'serial_motor' => 'required|string',
            'puestos' => 'required|integer',*/
        ];
    }

    public function messages()
    {
        return [
            'jornada.required' => 'El :attribute es obligatorio.',

            'placa.required' => 'El :attribute es obligatorio.',

            /*'ci_benef.required' => 'El :attribute es obligatorio.',

            'rif_org.required' => 'El :attribute es obligatorio.',

            'tipo_vehic.required' => 'El :attribute es obligatorio.',

            'serial_carr.required' => 'El :attribute es obligatorio.',
            'serial_carr.string' => 'El :attribute tiene que ser alfanúmerico.',

            'serial_motor.required' => 'El :attribute es obligatorio.',
            'serial_motor.string' => 'El :attribute tiene que ser alfanúmerico.',

            'puestos.required' => 'El :attribute es obligatorio.',
            'puestos.integer' => 'El :attribute tiene que ser numerico.',*/
        ];
    }

    public function attributes()
    {
        return [
            'jornada' => 'Jornada',
            'placa' => 'Placa Vehiculo',
            /*'ci_benef' => 'C.I. Beneficiario',
            'rif_org' => 'RIF Organización',
            'tipo_vehic' => 'Tipo Vehiculo',
            'serial_carr' => 'Serial Carroceria',
            'serial_motor' => 'Serial Motor',
            'puestos' => 'Puestos',*/
        ];
    }
}
