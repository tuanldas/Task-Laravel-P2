<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|max:100',
            'phone' => 'required|integer|min:11',
            'email' => 'required|email',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name không được để trống',
            'name.max' => 'Name không được quá 100 kí tự',
            'phone.required' => 'Phone không được để trống',
            'phone.integer' => 'Phone phải là số',
            'email.required' => 'Email phải là số',
            'email.email' => 'Email phải là dạng email',
        ];
    }
}
