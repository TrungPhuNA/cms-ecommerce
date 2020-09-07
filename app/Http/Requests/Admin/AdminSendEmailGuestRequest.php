<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminSendEmailGuestRequest extends FormRequest
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
            'seu_title'             => 'required',
            'seu_user_id'           => 'required',
            'seu_template_email_id' => 'required',
            'seu_time_start'        => 'required',
        ];
    }

    public function messages()
    {
        return [
            'seu_title.required'             => 'Dữ liệu không được để trống',
            'seu_user_id.required'           => 'Dữ liệu không được để trống',
            'seu_template_email_id.required' => 'Dữ liệu không được để trống',
            'seu_time_start.required'        => 'Dữ liệu không được để trống',
        ];
    }
}
