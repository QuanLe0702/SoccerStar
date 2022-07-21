<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'news_title' => 'required',
            'news_desc' => 'required',
            'news_content' => 'required',
            'news_image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'news_title.required' => 'Bạn chưa nhập tiêu đề',
            'news_desc.required' => 'Bạn chưa nhập tóm tắt bài viết',
            'news_content.required' => 'bạn chưa nhập nội dung',
            'news_image.required' => 'Hình ảnh là bắt buộc'
        ];
    }
}