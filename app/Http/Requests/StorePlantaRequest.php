<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlantaRequest extends FormRequest
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
            'nombre_cientifico' => ['required',''],
            'nombre_comun' => ['required',''],
            'descripcion' => ['required',''],
            'foto' => ['required',''],
            'tipo' => ['required',''],
            'necesidad_riego' => ['required','boolean'],
            'necesidad_solar' => ['required','boolean'],
            'necesidad_fertilizacion' => ['required','boolean'],
        ];
    }
}
