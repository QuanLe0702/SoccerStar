<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'customer_telephone' => 'Required|numeric|digits_between:9,12',
            'customer_name' => 'required',
            'customer_address' => 'required',
            'customer_mail' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'customer_telephone.required' => 'Bạn chưa nhập số điện thoại!',
            'customer_telephone.numeric' => 'Số điện thoại phải là số!',
            'customer_telephone.digits_between' => 'Số điện thoại chỉ từ 9-12 số !',
            'customer_telephone.max' => 'Số điện thoại dài nhất là 12 số!',
            
            'customer_address.required' => 'Bạn chưa nhập địa chỉ',
            
            'customer_name.required' => 'Bạn chưa nhập tên',
            
            'customer_mail.required' => 'Bạn chưa nhập e-mail!',
            'customer_mail.unique' => 'Email phải là duy nhất!',
            'customer_mail.email' => 'Email không đúng định dạng!',

        ];
    }
}
