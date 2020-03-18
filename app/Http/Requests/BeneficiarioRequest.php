<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiarioRequest extends FormRequest
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
            'ci_benef' => 'required',
            'rif_org' => 'required|exists:organizacions,rif_organizacion',
            'nom_benef' => 'required|string|max:40',
            'apell_benef' => 'required|string|max:40',
            'tipo_benef' => 'required|exists:tipo_beneficiarios,id_tipo_benef',
            'estado' => 'required|exists:estados,id_estado',
            'municipio' => 'required|exists:municipios,id_munic',
            'parroquia' => 'required|exists:parroquias,id_parroq',
            'telf' => 'required',
            'email_benef' => 'required',
            'direc_benef' => 'required|string|max:300',
        ];
    }

    public function messages()
    {
        return [
            'ci_benef,required' => 'El :attribute es obligatorio.',

            'rif_org.required' => 'El :attribute es obligatorio.',

            'nom_benef.required' => 'El :attribute es obligatorio.',
            'nom_benef.string' => 'El :attribute tiene que se alfanúmerico.',
            'nom_benef.max' => 'El :attribute debe contener máximo 40 caracteres.',

            'apell_benef.required' => 'El :attribute es obligatorio.',
            'apell_benef.string' => 'El :attribute tiene que se alfanúmerico.',
            'apell_benef.max' => 'El :attribute debe contener máximo 40 caracteres.',

            'tipo_benef.required' => 'El :attribute es obligatorio.',

            'estado.required' => 'El :attribute es obligatorio.',

            'municipio.required' => 'El :attribute es obligatorio.',

            'parroquia.required' => 'El :attribute es obligatorio.',

            'telf.required' => 'El :attribute es obligatorio.',

            'email_benef.required' => 'El :attribute es obligatorio.',

            'direc_benef.required' => 'El :attribute es obligatorio.',
            'direc_benef,max' => 'El :attribute debe contener máximo 300 caracteres.',
        ];
    }

    public function attributes()
    {
        return [
            'ci_benef' => 'C.I. Beneficiario',
            'rif_org' => 'RIF Organización',
            'nom_benef' => 'Nombre Beneficiario',
            'apell_benef' => 'Apellido Beneficiario',
            'tipo_benef' => 'Tipo de Beneficiario',
            'estado' => 'Estado',
            'municipio' => 'Municipio',
            'parroquia' => 'Parroquia',
            'telf' => 'Teléfono',
            'email_benef' => 'Correo',
            'direc_benef' => 'Dirección',
        ];
    }
}
