<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitaRequest extends FormRequest
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
            'fecha_visita' => ['required','date'],
            'email' => ['nullable','string', 'max:50'],
            'calificacion_id' => ['required', 'exists:calificaciones,id'],
            'comentarios' => 'nullable|min:10',
            'mural_id' => ['nullable', 'exists:murales,id'],
        ];
    }
}
