<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignarBeneficiarioRequest extends FormRequest
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
            'jornada' => 'required|exists:jornadas,id_jornada',
            'placa' => 'required|string|exists:vehiculos,placa',
            'tipo_insumo' => 'required|exists:tipo_insumos,id_tipo_insumo',
            'det_insumo' => 'required|exists:inventarios,insumos_id',
            'medida' => 'required|exists:unidad_medidas,id_medida',
            'cantidad' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'jornada.required' => 'El :attribute es obligatorio.',

            'placa.required' => 'El :attribute es obligatorio.',
            'placa.string' => 'El :attribute tiene que ser alfanúmerico.',

            'tipo_insumo.required' => 'El :attribute es obligatorio.',

            'det_insumo.required' => 'El :attribute es obligatorio.',

            'medida.required' => 'El :attribute es obligatorio.',

            'cantidad.required' => 'El :attribute es obligatorio.',
            'cantidad.integer' => 'El :attribute tiene que ser numerico.',
        ];
    }

    public function attributes()
    {
        return [
            'jornada' => 'Jornada',
            'placa' => 'Placa Vehiculo',
            'tipo_insumo' => 'Tipo Insumo',
            'det_insumo' => 'Detalle Insumo',
            'medida' => 'Unidad de Medida',
            'cantidad' => 'Cantidad',
        ];
    }
}
