<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalDataFormRequest extends FormRequest
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
            'ape_paterno' => [
                'required',
                'max:255'
            ],
            'ape_materno' => [
                'required',
                'max:255'
            ],
            'id_tipo_documento' => [
                'required',
                'max:255'
            ],
            'numero_documento' => [
                'required',
                'max:255'
            ],
            'fecha_nacimiento' => [
                'required',
                'max:255'
            ],
            'celular' => [
                'required',
                'max:255'
            ]
        ];
    }
}
