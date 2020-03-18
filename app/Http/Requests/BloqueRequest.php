<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BloqueRequest extends FormRequest
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
            'nom_bloque' => 'required|string|max:150',
            'nom_resp_prin' => 'required|string|max:40',
            'ape_resp_prin' => 'required|string|max:40',
            'telef_resp_prin' => 'required|max:20',
            'nom_resp_sup' => 'required|string|max:40',
            'ape_resp_sup' => 'required|string|max:40',
            'telef_resp_sup' => 'required|max:20',
        ];
    }

    public function messages()
    {
        return [
            'nom_bloque.required' => 'El :attribute es obligatorio.',
            'nom_bloque.string' => 'El :attribute tiene que ser alfanúmerico.',
            'nom_bloque.max' => 'El :attribute debe contener máximo 150 caracteres.',

            'nom_resp_prin.required' => 'El :attribute es obligatorio.',
            'nom_resp_prin.string' => 'El :attribute tiene que ser alfanúmerico.',
            'nom_resp_prin.max' => 'El :attribute debe contener máximo 40 caracteres.',

            'ape_resp_prin.required' => 'El :attribute es obligatorio.',
            'ape_resp_prin.string' => 'El :attribute tiene que ser alfanúmerico.',
            'ape_resp_prin.max' => 'El :attribute debe contener máximo 40 caracteres.',

            'telef_resp_prin.required' => 'El :attribute es obligatorio.',
            'telef_resp_prin.max' => 'El :attribute debe contener máximo 20 caracteres.',

            'nom_resp_sup.required' => 'El :attribute es obligatorio.',
            'nom_resp_sup.string' => 'El :attribute tiene que ser alfanúmerico.',
            'nom_resp_sup.max' => 'El :attribute debe contener máximo 40 caracteres.',

            'ape_resp_sup.required' => 'El :attribute es obligatorio.',
            'ape_resp_sup.string' => 'El :attribute tiene que ser alfanúmerico.',
            'ape_resp_sup.max' => 'El :attribute debe contener máximo 40 caracteres.',

            'telef_resp_sup.required' => 'El :attribute es obligatorio.',
            'telef_resp_sup.max' => 'El :attribute debe contener máximo 20 caracteres.',
        ];
    }

    public function attributes()
    {
        return [
            'nom_bloque' => 'Nombre del Bloque',
            'nom_resp_prin' => 'Nombre Responsable Principal',
            'ape_resp_prin' => 'Apellido Responsable Principal',
            'telef_resp_prin' => 'Teléfono Responsable Principal',
            'nom_resp_sup' => 'Nombre Responsable Suplente',
            'ape_resp_sup' => 'Apellido Responsable Suplente',
            'telef_resp_sup' => 'Teléfono Responsable Suplente',
        ];
    }
}
