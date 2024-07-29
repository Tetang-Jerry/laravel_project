<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            "nom"=>['min:6','required'],
            "prenom"=>['min:6','required'],
            "password"=>['min:8','required','unique:admins,password'],
            "email"=>['email','required','unique:admins,email'],
            "number"=>['required','digits','unique:admins,number']

            //
        ];
    
    }
}
