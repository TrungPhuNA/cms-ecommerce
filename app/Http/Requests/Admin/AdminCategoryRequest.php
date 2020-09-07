<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminCategoryRequest extends FormRequest
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
            'c_name'        => 'required|unique:categories,c_name,' . $this->id,
            'c_description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'c_name.required'        => 'Dữ liệu không được để trống',
            'c_name.unique'          => 'Dữ liệu đã tồn tại',
            'c_description.required' => 'Dữ liệu không được để trống',
        ];
    }
}
