<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
          
            'customer_name' => 'Required|string|min:3|max:100',
            'customer_telephone' => 'Required|numeric|digits_between:9,12',
            'customer_email' => 'Required|email|unique:customers,customer_email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]{3,5}+\.[a-z]{2,4}$/',
            'customer_password' => 'Required|min:6|max:60',
            'customer_confirm_password' => 'Required|same:customer_password'

        ];
    }

    public function messages()
    {
        return [
            'customer_name.required'=>'Bạn chưa nhập họ tên!',
            'customer_name.min'=>'Họ tên ít nhất là 3 ký tự!',
            'customer_name.max'=>'Họ tên dài nhất là 100 ký tự!',

            'customer_email.unique'=>'E-mail đã tồn tại!',
            'customer_email.required'=>'Bạn chưa nhập e-mail!',
            'customer_email.email'=>'Email không đúng định dạng!',
            'customer_email.regex'=>'Email phải có định dạng xxx@xxx.xxx',

            'customer_telephone.required'=>'Bạn chưa nhập số điện thoại!',
            'customer_telephone.numeric'=>'Số điện thoại phải là số!',
             'customer_telephone.digits_between'=>'Số điện thoại chỉ từ 9 đến 12 số !',
             'customer_telephone.max'=>'Số điện thoại dài nhất là 12 số!',

            'customer_password.required'=>'Bạn chưa nhập Mật khẩu!',
            'customer_password.min'=>'Mật khẩu có ít nhất 6 ký tự!',
            'customer_password.max'=>'Mật khẩu có nhiều nhất 60 ký tự!',

            'customer_confirm_password.required'=>'Bạn chưa nhập lại Mật khẩu!',
            'customer_confirm_password.same'=>'Mật khẩu chưa khớp!'


        ];
    }
}
