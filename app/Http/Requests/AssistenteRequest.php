<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssistenteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome'=>'required',
            'email'=>'required',
            'senha'=>'required',
            'confirmaSenha'=>'required',
            'matricula'=>'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required'=>'Informe o nome',
            'email.required'=>'Informe o email',
            'senha'=>'Informe a senha',
            'confirmaSenha'=>'Confirme a senha',
            'matricula'=>'Informe a matrícula'
        ];
    }
}
