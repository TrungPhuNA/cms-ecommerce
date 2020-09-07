<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminTemplateEmailRequest extends FormRequest
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
            'em_title'   => 'required',
            'em_content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'em_title.required'   => 'Dữ liệu không được để trống',
            'em_content.required' => 'Dữ liệu không được để trống',
        ];
    }
}
