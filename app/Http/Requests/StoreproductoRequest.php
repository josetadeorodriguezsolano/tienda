<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreproductoRequest extends FormRequest
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
            'descripcion' => 'required|min:5|max:255',
            'precio' => 'required|numeric|gt:0',
            'cantidad' => 'required|integer|gt:0|lt:1000',
            'descuento' => 'required|numeric|between:0,100',
            'especificaciones' => 'required|max:255',
            'categoria' => 'required|integer|exists:categorias,id',
            'foto' => 'required|file|mimes:jpeg|max:50',
        ];
    }

    public function messages()
    {
        return [
            'categoria.exists' => 'Categoria no existente',
        ];
    }
}
