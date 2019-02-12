<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFormPortofolio extends FormRequest
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
            'file' => 'mimes:jpeg,png,jpg|max:5048',
            'nama' => 'required|min:10',
            'kerjaan' => 'required|min:10',
            'deskripsi' => 'required|min:10',
            'url' => 'required|url'
        ];
    }

    public function messages()
    {
        return [
            'file.mimes' => 'Harus extensi [jpeg, png, jpg]!',
            'nama.required' => 'Tidak Boleh Kosong!',
            'nama.min' => 'Minimal 10 karakter!',
            'kerjaan.required' => 'Tidak Boleh Kosong!',
            'kerjaan.min' => 'Minimal 10 karakter!',
            'deskripsi.required' => 'Tidak Boleh Kosong!',
            'deskripsi.min' => 'Minimal 10 karakter',
            'url.required' => 'Tidak Boleh Kosong!',
            'url.url' => 'Tidak Valid!'
        ];
    }
}
