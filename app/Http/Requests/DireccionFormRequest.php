<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DireccionFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => [
                'required',
                'max:100'
            ],
            'apellido' => [
                'required',
                'max:255'
            ],
            'email' => [
                'required',
                'max:255'
            ],
            'celular' => [
                'required',
                'max:255'
            ],
            'direccion' => [
                'required',
                'max:255'
            ],
            'numero' => [
                'required',
                'max:255'
            ],
            'departamento' => [
                'required',
                'max:255'
            ],
            'provincia' => [
                'required',
                'max:255'
            ],
            'distrito' => [
                'required',
                'max:255'
            ],
            'zip_code' => [
                'required',
                'max:255'
            ],
            'descripcion_adicional' => [
                'required',
                'max:255'
            ]
        ];
    }
}
