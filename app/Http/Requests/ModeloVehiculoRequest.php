<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModeloVehiculoRequest extends FormRequest
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
            'nom_modelo' => 'required|string|max:25',
            'marca' => 'required|exists:marca_vehiculos,id_marca',
            'tipo_vehic' => 'required|exists:tipo_vehiculos,id_tipo_vehiculo',
            'chasis' => 'required',
            'carroceria' => 'required',
            'tipo_caucho' => 'required|exists:detalle_insumos,id_detalle_insumo',
            'cantidad_caucho' => 'required|integer',
            'tipo_aceite' => 'required|exists:detalle_insumos,id_detalle_insumo',
            'cantidad_litros' => 'required|integer',
            'tipo_bateria' => 'required|exists:detalle_insumos,id_detalle_insumo',
            'num_puestos' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'nom_modelo.required' => 'El :attribute es obligatorio.',
            'nom_modelo.string' => 'El :attribute tiene que se alfanúmerico.',
            'nom_modelo.max' => 'El :attribute debe contener máximo 25 caracteres.',

            'marca.required' => 'El :attribute es obligatorio.',

            'tipo_vehic.required' => 'El :attribute es obligatorio.',

            'chasis.required' => 'El :attribute es obligatorio.',

            'carroceria.required' => 'El :attribute es obligatorio.',

            'tipo_caucho.required' => 'El :attribute es obligatorio.',

            'cantidad_caucho.required' => 'El :attribute es obligatorio.',
            'cantidad_caucho.integer' => 'El :attribute debe ser numerico.',

            'tipo_aceite.required' => 'El :attribute es obligatorio.',

            'cantidad_litros.required' => 'El :attribute es obligatorio.',
            'cantidad_litros.integer' => 'El :attribute debe ser numerico.',

            'tipo_bateria.required' => 'El :attribute es obligatorio.',

            'num_puestos.required' => 'El :attribute es obligatorio.',
            'num_puestos.integer' => 'El :attribute debe ser numerico.',
        ];
    }

    public function attributes()
    {
        return [
            'nom_modelo' => 'Modelo de Vehiculo',
            'marca' => 'Marca',
            'tipo_vehic' => 'Tipo Vehiculo',
            'chasis' => 'Chasis del Vehiculo',
            'carroceria' => 'Carroceria del Vehiculo',
            'tipo_caucho' => 'Tipo Caucho',
            'cantidad_caucho' => 'Cantidad Caucho',
            'tipo_aceite' => 'Tipo Aceite',
            'cantidad_litros' => 'Cantidad de Litros',
            'tipo_bateria' => 'Tipo Bateria',
            'num_puestos' => 'Número de Puestos',
        ];
    }
}
