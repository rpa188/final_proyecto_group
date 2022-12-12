<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
            'id_categoria' => [
                'required'
            ],
            'nombre' => [
                'required',
                'max:100'
            ],
            'SKU' => [
                'required',
                'max:20'
            ],
            'descripcion' => [
                'required',
                'max:255'
            ],
            'precio' => [
                'required'
            ]
        ];
    }
}
