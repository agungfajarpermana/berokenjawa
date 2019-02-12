<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFormEmail extends FormRequest
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
            'name' => 'required|alpha|min:5|max:20',
            'phones'=> 'required|numeric|min:12',
            'email'=> 'required|email',
            'pesan'=> 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ga boleh kosong!',
            'name.alpha' => 'Harus berupa alphabetic',
            'name.min' => 'Minimal 5 karakter!',
            'name.max' => 'Maksimal 20 karakter!',
            'phones.required'=> 'Ga boleh kosong!',
            'phones.numeric' => 'Harus berupa angka!',
            'phones.min' => 'Minimal 12 angka!',
            'email.required'=> 'Ga boleh kosong!',
            'email.email' => 'Email tidak valid!',
            'pesan.required'=> 'Ga boleh kosong!',
            'pesan.min' => 'Minimal 10 karakter'
        ];
    }
}
