<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequests extends FormRequest
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
            'nama' => 'required|max:200',
            'email' => 'required|email',
            'pesan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'nama.max' => 'Nama maksimal 200 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus dalam format yang benar.',
            'pesan.required' => 'Pesan wajib diisi.',
        ];
    }
}
