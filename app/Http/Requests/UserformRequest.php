<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return TRUE;
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
            'nom' => ['required'],
            'prenom' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'passwordVerify' => ['required'],
            'numero' => ['required'],
            'code' => ['required'],
            'codeVerify' => ['required'],
        ];
    }
}