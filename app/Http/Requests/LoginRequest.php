<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'customer_email' => 'Required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]{3,5}+\.[a-z]{2,4}$/',
            'customer_password' => 'Required|min:6|max:60',
        ];
    } 
    
    public function messages()
    {
        return [

            'customer_email.required'=>'Bạn chưa nhập e-mail!',
            'customer_email.email'=>'Email không đúng định dạng!',
            'customer_email.regex'=>'Email phải có định dạng xxx@xxx.xxx',

            'customer_password.required'=>'Bạn chưa nhập mật khẩu',
            'customer_password.min'=>'Mật khẩu có ít nhất 6 ký tự chữ số',
            'customer_password.max'=>'Mật khẩu có nhiều nhất 60 ký tự chữ số',
           
        ];
    }
}
