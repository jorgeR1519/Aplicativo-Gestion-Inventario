<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
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

            // 1.validaciones para los imputs del formulario video 5
            'idcategoria' =>'required',
            'codigo'=> 'required|max:50',
            'nombre'=> 'required|max:100',
            'stock'=> 'required|numeric',
            'descripcion'=> 'max:256',
            'imagen'=> 'mimes:jpeg,bmp,png'     
        ];
    }
}