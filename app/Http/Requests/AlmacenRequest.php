<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlmacenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Esto nos da el permiso para acceder al required
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom_almacen' => 'required|string|max:25',
            'estado' => 'required|exists:estados,id_estado',
            'direc_almacen' => 'required|string|max:150',
        ];
    }

    // se encargará de hacer los mensajes para nuestras reglas de validaciones
    public function messages()
    {
        return [
            'nom_almacen.required' => 'El :attribute es obligatorio.',
            'nom_almacen.string' => 'El :attribute tiene que se alfanúmerico.',
            'nom_almacen.max' => 'El :attribute debe contener máximo 25 caracteres.',

            'estado.required' => 'El :attribute es obligatorio.',
            
            'direc_almacen.required' => 'El :attribute es obligatorio.',
            'direc_almacen.string' => 'El :attribute tiene que se alfanúmerico.',
            'direc_almacen.max' => 'El :attribute debe contener máximo 150 caracteres.',
        ];
    }

    // nos permitirá poder poner “Alias” a nuestros atributos que llegan desde el formulario.
    public function attributes()
    {
        return [
            'nom_almacen' => 'Nombre de Almacén',
            'estado' => 'Estado',
            'direc_almacen' => 'Dirección del Almacén',
        ];
    }
}
