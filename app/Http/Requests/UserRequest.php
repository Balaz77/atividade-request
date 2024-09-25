<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:12',
            'idade' => 'required|integer|max:99',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:8|',
            'endereco' => 'required|string|max:255',
            'complemento' => 'nullable|string|max:255',

        ];
    }

    public function avisos(){
    
            return[
                'nome.required' => 'Este campo deve ser preenchido obrigatoriamente.',
                'nome.string' => 'O campo deve ser um texto.',
                'cpf.required' => 'Este campo deve ser preenchido obrigatoriamente.',
                'cpf.string' => 'O campo deve conter seu cpf',
                'idade.required' => 'Insira sua idade',
                'email.required' => 'Insira seu email',
                'email.email' => 'O campo deve ser preenchido com seu email',
                'senha.required' => 'O campo deve conter sua senha',
                'senha.string' => 'O campo deve conter seu cpf',
                'cpf.min' => 'O campo deve conter no mínimo 8 caracteres',
                'endereco.required' => 'O campo deve conter seu endereço',
                'endereco.string' => 'O campo deve conter ser um texto',
                'complemento.string' => 'O campo deve conter ser um texto',
            ];
    }
}


