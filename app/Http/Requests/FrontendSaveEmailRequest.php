<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrontendSaveEmailRequest extends FormRequest
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
            'g_email' => 'required|unique:guests,g_email'
        ];
    }

    public function messages()
    {
        return [
            'g_email.required' => 'Dữ liệu không được để trống',
            'g_email.unique'   => 'Dữ liệu đã tồn tại'
        ];
    }
}
