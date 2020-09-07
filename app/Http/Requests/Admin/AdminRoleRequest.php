<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRoleRequest extends FormRequest
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
            'name'        => 'required|unique:roles,name,' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Dữ liệu không được để trống',
            'name.unique'          => 'Dữ liệu đã tồn tại'
        ];
    }
}
