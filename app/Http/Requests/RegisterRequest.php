<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'cpf' => 'required|numeric|min:11',
            'phone' => 'required|numeric|min:11',
            'cep' => 'required|numeric|min:8',
            'password' => 'required|min:6',
            'terms' => 'required'
        ];
    }
}