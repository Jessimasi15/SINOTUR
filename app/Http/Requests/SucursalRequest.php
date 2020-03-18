<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SucursalRequest extends FormRequest
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
            'empresa' => 'required|exists:empresas,id_empresa',
            'nom_coord' => 'required|string|max:100',
            'telef_coord' => 'required',
            'direc_coord' => 'required|string|max:200',
        ];
    }

    public function messages()
    {
        return [
            'empresa.required' => 'El :attribute es obligatorio.',

            'nom_coord.required' => 'El :attribute es obligatorio.',
            'nom_coord.string' => 'El :attribute tiene que ser alfanúmerico.',
            'nom_coord.max' => 'El :attribute debe contener máximo 100 caracteres.',

            'telef_coord.required' => 'El :attribute es obligatorio.',
            //'telef_coord.integer' => 'El :attribute debe ser numerico.',

            'direc_coord.required' => 'El :attribute es obligatorio.',
            'direc_coord.string' => 'El :attribute tiene que ser alfanúmerico.',
            'direc_coord.max' => 'El :attribute debe contener máximo 200 caracteres.',
        ];
    }

    public function attributes()
    {
        return [
            'empresa' => 'RIF de la Sucursal',
            'nom_coord' => 'Nombre de la Sucursal',
            'telef_coord' => 'Teléfono de la Sucursal',
            'direc_coord' => 'Dirección de la Sucursal',
        ];
    }
}
