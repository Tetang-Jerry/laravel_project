<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userFormrequest extends FormRequest
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
            "nom"=>'required|min:6',
            'email'=> 'required|email',
            'prenom'=> 'required|min:6',
            'username'=> 'required|min:6',
            'password'=> 'required|min:8|confirmed',
            'password_verify'=> 'required|same:passord',
            'numero'=> 'required|',
            'code'=> 'required',
        ];
    }
}
