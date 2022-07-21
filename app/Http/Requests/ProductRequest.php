<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name'=>'required||min:3|max:200',
            'product_price'=>'required|min:1',
            'product_image'=>'required|image|mimes:jpg,jpeg,bmp,png|max:10240'
        ];
    }
    public function messages()
    {
        return [
            'product_name.required'=>'Name cannot be blank',
            'product_name.min'=>'Name is minium 5 characters',
            'product_name.max'=>'Name is maxium 50 characters',
            'product_price.required'=>'Price cannot be blank',
            'product_image.required'=>'Image must be uploaded',
            'product_image.mimes'=>'Image must be jpg,jpeg,bmp,png'
            
        ];
    }
}
