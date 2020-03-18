<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'rif_empresa' => 'required|string|max:15',
            'nom_empresa' => 'required|string|max:100',
            'telef_empresa' => 'required',
            'correo_empresa' => 'required|email|max:40',
            'sitio_web' => 'max:50',
            'estatus' => 'required|exists:estatus_empresas,id_estatus',
            'twitter' => 'max:35',
            'instagram' => 'max:35',
            'facebook' => 'max:35',
            'direc_emp' => 'required|string|max:200',
        ];
    }

    // se encargará de hacer los mensajes para nuestras reglas de validaciones
    public function messages()
    {
        return [
            'rif_empresa.required' => 'El :attribute es obligatorio.',
            'rif_empresa.string' => 'El :attribute tiene que ser alfanúmerico.',
            'rif_empresa.max' => 'El :attribute debe contener máximo 15 caracteres.',

            'nom_empresa.required' => 'El :attribute es obligatorio.',
            'nom_empresa.string' => 'El :attribute tiene que ser alfanúmerico.',
            'nom_empresa.max' => 'El :attribute debe contener máximo 100 caracteres.',

            'telef_empresa.required' => 'El :attribute es obligatorio.',

            'correo_empresa.required' => 'El :attribute es obligatorio.',
            'correo_empresa.email' => 'El :attribute debe ser de tipo email.',
            'correo_empresa.max' => 'El :attribute debe contener máximo 40 caracteres.',

            'sitio_web.max' => 'El :attribute debe contener máximo 50 caracteres.',

            'estatus.required' => 'El :attribute es obligatorio.',

            'twitter.max' => 'El :attribute debe contener máximo 35 caracteres.',

            'instagram.max' => 'El :attribute debe contener máximo 35 caracteres.',

            'facebook.max' => 'El :attribute debe contener máximo 35 caracteres.',

            'direc_emp.required' => 'El :attribute es obligatorio.',
            'direc_emp.string' => 'El :attribute tiene que ser alfanúmerico.',
            'direc_emp.max' => 'El :attribute debe contener máximo 200 caracteres.',
        ];
    }

    // nos permitirá poder poner “Alias” a nuestros atributos que llegan desde el formulario.
    public function attributes()
    {
        return [
            'rif_empresa' => 'RIF de la Empresa',
            'nom_empresa' => 'Nombre de la Empresa',
            'telef_empresa' => 'Teléfono de la Empresa',
            'correo_empresa' => 'Correo de la Empresa',
            'sitio_web' => 'Sitio Web de la Empresa',
            'estatus' => 'Estatus de la Empresa',
            'twitter' => 'Twitter de la Empresa',
            'instagram' => 'Instagram de la Empresa',
            'facebook' => 'Facebook de la Empresa',
            'direc_emp' => 'Dirección de la Empresa',
        ];
    }
}
