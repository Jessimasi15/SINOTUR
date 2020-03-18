<?php

namespace Sinotur\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearUsuarioRequest extends FormRequest
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
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'usuarios' => 'required|exists:roles,id',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El :attribute es obligatorio.',
            'username' => '',

            'email.required' => 'El :attribute es obligatorio.',
            'email' => '',

            'password.required' => 'El :attribute es obligatorio.',
            'password' => '',

            'usuarios.required' => 'El :attribute es obligatorio.',
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'Nombre de usuario',
            'email' => 'Correo Electronico',
            'password' => 'Contraseña',
            'usuarios' => 'Tipo de usuario',
        ];
    }
}
