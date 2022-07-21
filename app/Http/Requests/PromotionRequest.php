<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionRequest extends FormRequest
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
        'promotion_name'=>'required|min:3|max:30',
        'promotion_type'=>'required',
        'promotion_time_start'=>'required',
        'promotion_time_end'=>'required',
        'promotion_value'=>'required',


        ];
    }
    public function messages()
    {
        return[
        'product_type_name.required'=>'Tên giảm giá không được bỏ trống',
        'promotion_type.required'=>'Loại giảm giá không được bỏ trống',
        'promotion_time_start.required'=>'Ngày bắt đầu không được bỏ trống',
        'promotion_time_end.required'=>'Ngày kết thúc không được bỏ trống',
        'promotion_value.required'=>'Giá trị giảm giá không được bỏ trống',
        'product_type_name.min'=>'Tên giảm giá không được dưới 3 ký tự',
        'product_type_name.max'=>'Tên giảm giá  phẩm không được trên 30 ký tự',

        ];
    }
}
