<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFormPassword extends FormRequest
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
            'email' => 'required|email',
            'oldpass' => 'required',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Ga boleh kosong!',
            'email.email' => 'Email tidak valid',
            'oldpass.required' => 'Ga boleh kosong!',
            'password.required' => 'Ga boleh kosong!',
            'password.confirmed'=> 'Password dan retype password tidak cocok!'
        ];
    }
}
