<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgregarInsumosRequest extends FormRequest
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
            'num_orden' => 'required|integer',
            'fecha_desp' => 'required',
            'fecha_inven' => 'required',
            'tipo_insumo' => 'required|exists:tipo_insumos,id_tipo_insumo',
            'marca_insumos' => 'required|exists:marca_insumos,id_marca_insumo',
            'det_insumo' => 'required|exists:detalle_insumos,id_detalle_insumo',
            'nom_almacen' => 'required|exists:almacens,id_almacen',
            'medida' => 'required|exists:unidad_medidas,id_medida',
            'cantidad' => 'required|integer',
            'monto_compra' => 'required',
            'ganancia' => 'required',
            'monto_venta' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'num_orden.required' => 'El :attribute es obligatorio.',
            'num_orden.integer' => 'El :attribute debe ser numerico.',

            'fecha_desp.required' => 'El :attribute es obligatorio.',

            'fecha_inven.required' => 'El :attribute es obligatorio.',

            'tipo_insumo.required' => 'El :attribute es obligatorio.',

            'marca_insumos.required' => 'El :attribute es obligatorio.',

            'det_insumo.required' => 'El :attribute es obligatorio.',

            'nom_almacen.required' => 'El :attribute es obligatorio.',

            'medida.required' => 'El :attribute es obligatorio.',

            'cantidad.required' => 'El :attribute es obligatorio.',
            'cantidad.integer' => 'El :attribute debe ser numerico.',

            'monto_compra.required' => 'El :attribute es obligatorio.',

            'ganancia.required' => 'El :attribute es obligatorio.',

            'monto_venta.required' => 'El :attribute es obligatorio.',
        ];
    }

    public function attributes()
    {
        return [
            'num_orden' => 'Número de Orden',
            'fecha_desp' => 'Fecha despacho',
            'fecha_inven' => 'Fecha de Ingreso',
            'tipo_insumo' => 'Tipo de Insumo',
            'marca_insumos' => 'Marca de Insumo',
            'det_insumo' => 'Detalle de Insumo',
            'nom_almacen' => 'Almacén',
            'medida' => 'Unidad de Medida',
            'cantidad' => 'Cantidad',
            'monto_compra' => 'Monto de Compra',
            'ganancia' => 'Ganacia 30%',
            'monto_venta' => 'Monto de Venta',
        ];
    }
}
