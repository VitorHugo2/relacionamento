<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'name'=>'required|min:3',
            
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'O email é obrigatório',
            'email.email'=>'O email deve ser valido',
            'password.required'=> 'A senha é Obrigatória',
            'password.confirmed'=> 'As duas senhas devem ser a mesma',
            'name.required'=>'O Nome é obrigatório',
            'name.min'=>'O Nome deve ter no minimo 3 letras',
        ];
    }
}
