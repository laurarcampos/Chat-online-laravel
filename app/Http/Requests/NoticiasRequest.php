<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        //autorização pra usuário logado
        //ficou true pq não necessita
        //voltar aqui pra trocar
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titulo'=>'required',
            'mensagem'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required'=>'Informe o título',
            'mensagem.required'=>'Informe a mensagem'
        ];
    }
}
