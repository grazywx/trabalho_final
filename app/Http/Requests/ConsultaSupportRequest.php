<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaSupportRequest extends FormRequest
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
            'nome' => 'required| min:5| max:100',
            'rg' => 'required| min:8| max:10',
            'motivo_consulta' => 'required| min:6| max:100',
            'data_consulta' => 'required| min:6| max:8',
            'hora' => 'required| min:5| max:10',
            
        ];
    }
}
