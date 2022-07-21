<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductType extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'product_type_name'=>'required|min:3|max:30'
        ];
    }
    public function messages()
    {
        return[
        'product_type_name.required'=>'Tên loại sản phẩm không được bỏ trống',
        'product_type_name.min'=>'Tên phải trên 3 ký tự',
        'product_type_name.max'=>'Tên phải dưới 30 ký tự'
        ];
    }
}
