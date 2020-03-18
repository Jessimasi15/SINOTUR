<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignarVehiculoRequest extends FormRequest
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
            'placa' => 'required|string',
            'rif_org' => 'required|exists:organizacions,rif_organizacion',
            'ci_benef' => 'required|exists:beneficiarios,ci_beneficiario',
            'marca' => 'required|exists:marca_vehiculos,id_marca',
            'modelo' => 'required|exists:modelo_vehiculos,id_modelo',
            'serial_carr' => 'required|string',
            'serial_motor' => 'required|string',
            'color' => 'required|exists:colors,id_color',
            'año' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'placa.required' => 'El :attribute es obligatorio.',
            'placa.string' => 'El :attribute tiene que se alfanúmerico.',

            'rif_org.required' => 'El :attribute es obligatorio.',

            'ci_benef.required' => 'El :attribute es obligatorio.',

            'marca.required' => 'El :attribute es obligatorio.',

            'modelo.required' => 'El :attribute es obligatorio.',

            'serial_carr.required' => 'El :attribute es obligatorio.',
            'serial_carr.string' => 'El :attribute tiene que se alfanúmerico.',

            'serial_motor.required' => 'El :attribute es obligatorio.',
            'serial_motor.string' => 'El :attribute tiene que se alfanúmerico.',

            'color.required' => 'El :attribute es obligatorio.',
            
            'año.required' => 'El :attribute es obligatorio.',
        ];
    }

    public function attributes()
    {
        return [
            'placa' => 'Placa Vehiculo',
            'rif_org' => 'RIF Organización',
            'ci_benef' => 'C.I. Beneficiario',
            'marca' => 'Marca Vehiculo',
            'modelo' => 'Modelo Vehiculo',
            'serial_carr' => 'Serial Carroceria',
            'serial_motor' => 'Serial Motor',
            'color' => 'Color Vehiculo',
            'año' => 'Año Vehiculo',
        ];
    }
}
