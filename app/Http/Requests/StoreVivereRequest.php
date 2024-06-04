<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVivereRequest extends FormRequest
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
            'nombre' => ['required','string',''],
            'cantidad' => ['required','numeric','min:1'],
            'udm' => ['required','string',''],
            'fecha_compra' => ['required','date:format:d-m-Y'],
            'fecha_caducidad' => ['required','date:format:d-m-Y'],
        ];
    }
}
