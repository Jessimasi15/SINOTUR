<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizacionRequest extends FormRequest
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
            'rif_org' => 'required|string|max:15',
            'nom_org' => 'required|string|max:100',
            'tipo_organ' => 'required|exists:tipo_organizacions,id_tipo_organ',
            'ci_presi' => 'required',
            'nom_presi' => 'required|string|max:40',
            'apell_presi' => 'required|string|max:40',
            'email_org' => 'required|max:50',
            'telf_local' => 'required',
            'telf_cel' => 'required',
            'estado' => 'required|exists:estados,id_estado',
            'municipio' => 'required|exists:municipios,id_munic',
            'parroquia' => 'required|exists:parroquias,id_parroq',
            'bloque' => 'required|exists:bloques,id_bloque',
            'ruta_org' => 'required|string|max:300',
            'direc_org' => 'required|string|max:300',
        ];
    }

    public function messages()
    {
        return [
            'rif_org.required' => 'El :attribute es obligatorio.',
            'rif_org.string' => 'El :attribute tiene que se alfanúmerico.',
            'rif_org.max' => 'El :attribute debe contener máximo 15 caracteres.',

            'nom_org.required' => 'El :attribute es obligatorio.',
            'nom_org.string' => 'El :attribute tiene que se alfanúmerico.',
            'nom_org.max' => 'El :attribute debe contener máximo 100 caracteres.',

            'tipo_organ.required' => 'El :attribute es obligatorio.',

            'ci_presi.required' => 'El :attribute es obligatorio.',

            'nom_presi.required' => 'El :attribute es obligatorio.',
            'nom_presi.string' => 'El :attribute tiene que se alfanúmerico.',
            'nom_presi.max' => 'El :attribute debe contener máximo 40 caracteres.',

            'apell_presi.required' => 'El :attribute es obligatorio.',
            'apell_presi.string' => 'El :attribute tiene que se alfanúmerico.',
            'apell_presi.max' => 'El :attribute debe contener máximo 25 caracteres.',

            'email_org.required' => 'El :attribute es obligatorio.',
            'email_org.max' => 'El :attribute debe contener máximo 50 caracteres.',

            'telf_local.required' => 'El :attribute es obligatorio.',

            'telf_cel.required' => 'El :attribute es obligatorio.',

            'estado.required' => 'El :attribute es obligatorio.',

            'municipio.required' => 'El :attribute es obligatorio.',

            'parroquia.required' => 'El :attribute es obligatorio.',

            'bloque.required' => 'El :attribute es obligatorio.',

            'ruta_org.required' => 'El :attribute es obligatorio.',
            'ruta_org.string' => 'El :attribute tiene que se alfanúmerico.',
            'ruta_org.max' => 'El :attribute debe contener máximo 300 caracteres.',

            'direc_org.required' => 'El :attribute es obligatorio.',
            'direc_org.string' => 'El :attribute tiene que se alfanúmerico.',
            'direc_org.max' => 'El :attribute debe contener máximo 300 caracteres.',
        ];
    }

    public function attributes()
    {
        return [
            'rif_org' => 'RIF Organización',
            'nom_org' => 'Nombre Organización',
            'tipo_organ' => 'Tipo de Organización',
            'ci_presi' => 'C.I. Presidente',
            'nom_presi' => 'Nombre Presidente',
            'apell_presi' => 'Apellido Presidente',
            'email_org' => 'Correo Organización',
            'telf_local' => 'Teléfono Local',
            'telf_cel' => 'Teléfono Celular',
            'estado' => 'Estado',
            'municipio' => 'Municipio',
            'parroquia' => 'Parroquia',
            'bloque' => 'Bloque',
            'ruta_org' => 'Ruta Organización',
            'direc_org' => 'Dirección Organización',
        ];
    }
}
