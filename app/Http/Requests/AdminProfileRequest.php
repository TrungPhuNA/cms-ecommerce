<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProfileRequest extends FormRequest
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
            'email'    => 'required|unique:admins,email,' . $this->id,
            'username' => 'required|unique:admins,username,' . $this->id,
            'password' => 'min:8'
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => 'Dữ liệu không được để trống',
            'email.unique'      => 'Dữ liệu đã tồn tại',
            'username.required' => 'Dữ liệu không được để trống',
            'username.unique'   => 'Dữ liệu đã tồn tại',
            'password.min'      => 'Mật khẩu phải lớn hơn 8 ký tự',
        ];
    }
}
