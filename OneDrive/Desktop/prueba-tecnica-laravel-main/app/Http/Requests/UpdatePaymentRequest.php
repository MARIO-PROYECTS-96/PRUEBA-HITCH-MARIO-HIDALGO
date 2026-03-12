<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description' => 'required|string|max:255',
            'price'       => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'La descripción es obligatoria.',
            'description.max'      => 'La descripción no puede superar los 255 caracteres.',
            'price.required'       => 'El precio es obligatorio.',
            'price.integer'        => 'El precio debe ser un número entero.',
            'price.min'            => 'El precio no puede ser negativo.',
        ];
    }
}
