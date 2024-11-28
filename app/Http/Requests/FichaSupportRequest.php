<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaSupportRequest extends FormRequest
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
            'nome' => 'required| min:4| max:100',
            'data_nascimento' => 'required| min:6| max:10',
            'genero' => 'required| min:1| max:10',
            'endereco' => 'required| min:10| max:100',
            'data_ficha' => 'required| min:6| max:10',
            'descricao' => 'required| min:10| max:100',
            'diagnostico' => 'required| min:10| max:100',
            'prescricao' => 'required| min:10| max:100',
            'medico' => 'required| min:4| max:100',
        ];
    }
}
