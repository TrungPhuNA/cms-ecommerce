<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminSettingEmailRequest extends FormRequest
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

    public function rules()
    {
        return [
            'em_driver'       => 'required',
            'em_host'         => 'required',
            'em_port'         => 'required',
            'em_username'     => 'required',
            'em_password'     => 'required',
            'em_from_address' => 'required',
            'em_domain'       => 'required',
        ];
    }

    public function messages()
    {
        return [
            't_name.required.required' => 'Dữ liệu không được để trống',
            'em_driver.required'       => 'Dữ liệu không được để trống',
            'em_host.required'         => 'Dữ liệu không được để trống',
            'em_port.required'         => 'Dữ liệu không được để trống',
            'em_username.required'     => 'Dữ liệu không được để trống',
            'em_password.required'     => 'Dữ liệu không được để trống',
            'em_from_address.required' => 'Dữ liệu không được để trống',
            'em_domain.required'       => 'Dữ liệu không được để trống',
        ];
    }
}
