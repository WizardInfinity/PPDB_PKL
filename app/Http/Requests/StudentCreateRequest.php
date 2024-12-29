<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'nis' => 'unique:students|max:10|required',
            'nama' => 'max:50|required',
            'gender' => 'required',
            'class_id' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'nis' => 'NIS',
            'nama' => 'NAMA',
            'gender' => 'GENDER',
            'class_id' => 'CLASS'
        ];
    }
    public function messages()
    {
        return [
            'nis.required' => 'NIS Wajib Di Isi',
            'nis.max' => 'NIS Maksimal :max Karakter',
            'nama.required' => 'NAMA Wajib Di Isi',
            'nama.max' => 'NAMA Maksimal :max Karakter',
            'gender.required' => 'GENDER Wajib Di Isi',
            'class_id.required' => 'CLASS Wajib Di Isi'
        ];
    }
}
