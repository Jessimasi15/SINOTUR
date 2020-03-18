<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignacionInsumoRequest extends FormRequest
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
            'almacen' => 'required|exists:almacens,id_almacen',
            'tipo_insumo' => 'required|exists:tipo_insumos,id_tipo_insumo',
            'marca_insumos' => 'required|exists:marca_insumos,id_marca_insumo',
            'det_insumo' => 'required|exists:detalle_insumos,id_detalle_insumo',
            'medida' => 'required|exists:unidad_medidas,id_medida',
            'cantidad' => 'required|integer',
            'num_orden' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'almacen.required' => 'El :attribute es obligatorio.',

            'tipo_insumo.required' => 'El :attribute es obligatorio.',

            'marca_insumos.required' => 'El :attribute es obligatorio.',

            'det_insumo.required' => 'El :attribute es obligatorio.',

            'medida.required' => 'El :attribute es obligatorio.',

            'cantidad.required' => 'El :attribute es obligatorio.',
            'cantidad.integer' => 'El :attribute debe ser numerico.',

            'num_orden.required' => 'El :attribute es obligatorio.',
            'num_orden.integer' => 'El :attribute debe ser numerico.',
        ];
    }

    public function attributes()
    {
        return [
            'almacen' => 'Almacén',
            'tipo_insumo' => 'Tipo de Insumo',
            'marca_insumos' => 'Marca de Insumo',
            'det_insumo' => 'Detalle de Insumo',
            'medida' => 'Unidad de Medida',
            'cantidad' => 'Cantidad',
            'num_orden' => 'Número de Orden',
        ];
    }
}
