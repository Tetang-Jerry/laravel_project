<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            //
            'nom' => ['required', 'min:6'],
            'prenom' => ['required', 'min:6'],
            'username' => ['required', 'min:6', 'unique:alpha_transit_users,username'],
            'email' => ['required', 'email', 'unique:alpha_transit_users,email'],
            'password' => ['required', 'min:8'],
            'passwordVerify' => ['required', 'same:password'],
            'numero'=>['required'],
            'code'=>['required', 'digits:4'],
            'codeVerify' => ['required', 'same:code'],
        ];
    }
}
