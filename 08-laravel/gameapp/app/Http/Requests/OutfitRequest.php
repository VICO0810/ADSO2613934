<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OutfitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'user_id' => ['required', 'numeric'],
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El campo nombre es obligatorio',
            'name.string' => 'El campo nombre debe ser texto',
            'description.required' => 'El campo descripción es obligatorio',
            'description.string' => 'El campo descripción debe ser texto',
            'user_id.required' => 'El campo usuario es obligatorio',
            'user_id.numeric' => 'El campo usuario debe ser numérico',
        ];
    }

    /**
     * Get the custom attribute names.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'nombre',
            'description' => 'descripción',
            'user_id' => 'usuario',
        ];
    }
}
