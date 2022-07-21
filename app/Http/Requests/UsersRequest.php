<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name' => 'required|min:5|max:100',
            'email' => 'Required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập họ tên',
            'name.min' => 'Họ tên ít nhất là 5 ký tự',
            'name.max' => 'Họ tên dài nhất là 100 ký tự',
            'password.required' => 'Bạn chưa nhập Mật khẩu',
            'role.required' => 'Bạn chưa chọn chức vụ',
            
            'email.unique'=>'E-mail đã tồn tại!',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'E-mail chưa đúng định dạng',
        ];
    }
}
