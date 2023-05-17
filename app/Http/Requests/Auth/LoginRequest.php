<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email|exists:users',
            'password'=>'required|string'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'O email é obrigatório',
            'email.email'=>'O email deve ser válido',
            'email.exists'=>'Email não encontrado',
            'password'=>'A senha é obrigatória',
            'password.string'=>'A senha deve ser uma string',
        ];
    }
}
