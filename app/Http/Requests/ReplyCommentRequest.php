<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplyCommentRequest extends FormRequest
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
            'comment_reply' => 'required|string|min:3|max:300'
        ];
    }

    public function messages()
    {
        return [
            'comment_reply.required'=>'Bạn chưa nhập trả lời!',
            'comment_reply.min'=>'Nội dung trả lời ít nhất là 3 ký tự!',
            'comment_reply.max'=>'Nội dung trả lời dài nhất là 300 ký tự!',

        ];
    }
}
