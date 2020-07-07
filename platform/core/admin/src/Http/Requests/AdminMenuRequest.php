<?php

namespace Core\Admin\Http\Requests;

use Illuminate\Http\Request;

class AdminMenuRequest extends Request
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
            'mn_name'        => 'required',
            'mn_description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'mn_name.required'        => 'Dữ liệu không được để trống',
            'mn_description.required' => 'Dữ liệu không được để trống',
        ];
    }
}
