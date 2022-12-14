<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMuebleRequest extends FormRequest
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
            'tipo'=> [
                'required'
            ],
            'unidadMedida'=> [
                'required'
            ],
            'estado'=> [
                'nullable'
            ],
            'procedencia'=> [
                'nullable'
            ],
            'ubicacion'=> [
                'nullable'
            ],
            'observacion'=> [
                'nullable'
            ],
        ];
    }
}
