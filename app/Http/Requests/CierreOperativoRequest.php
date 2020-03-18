<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CierreOperativoRequest extends FormRequest
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
            'nom_jorn' => 'required|exists:jornadas,id_jornada',
        ];
    }

    public function messages()
    {
        return [
            'nom_jorn.required' => 'El :attribute es obligatorio.',
        ];
    }

    public function attributes()
    {
        return [
            'nom_jorn' => 'Nombre de la Jornada',
        ];
    }
}
