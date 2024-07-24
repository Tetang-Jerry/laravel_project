<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserformRequest extends FormRequest
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
            'nom'=>'required|min:6|',
            'prenom'=>'required|min:6|',
            'email'=>'required|email',
            'usename'=>'required|min:6|',
            'password'=>'required|min:8|confirmed',
            'password_verify'=>'required|same:password',
            'numero'=>'required|digits:11|',
            'code'=>'require',


        ];
    }
}
