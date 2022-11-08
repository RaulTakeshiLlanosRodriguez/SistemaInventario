<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEquipoRequest extends FormRequest
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
            'codPatrimonial'=> [
                'required'
            ],
            'ubicacion'=> [
                'required'
            ],
            'tipo'=> [
                'required'
            ],
            'marca'=> [
                'nullable'
            ],
            'tipoDescripcion'=> [
                'nullable'
            ],
            'numDescripcion'=> [
                'nullable'
            ],
        ];
    }
}
