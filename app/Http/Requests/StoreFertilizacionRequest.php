<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFertilizacionRequest extends FormRequest
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
            //
            'id_planta' => ['required',''],
            'nombre' => ['required','string'],
            'tipo' => ['required',''],
            'frecuencia' => ['required',''],
            'metodo' => ['required',''],
            'cantidad' => ['required','numeric','min:1',],
            'fecha_ultima_aplicacion' => ['required','date:format:d-m-Y'],
            'proxima_aplicacion' => ['required','date:format:d-m-Y'],
        ];
    }
}
