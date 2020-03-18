<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarcaVehiculoRequest extends FormRequest
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
            'nom_marca' => 'required|string|max:25',
        ];
    }

    public function messages()
    {
        return [
            'nom_marca.required' => 'El :attribute es obligatorio.',
            'nom_marca.string' => 'El :attribute tiene que se alfanúmerico.',
            'nom_marca.max' => 'El :attribute debe contener máximo 25 caracteres.',
        ];
    }

    public function attributes()
    {
        return [
            'nom_marca' => 'Nombre de la Marca',
        ];
    }
}
