<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
        $rules = [
            'id_categoria' => [
                'required'
            ],
            'id_marca' => [
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
            'stock' => [
                'required'
            ]
        ];

        $user = User::find(Auth::id());
        if ($user->can('create-users')) {
            $rules['precio'] = ['required'];
        }

        return $rules;
    }
}
