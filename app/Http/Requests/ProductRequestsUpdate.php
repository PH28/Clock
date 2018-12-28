<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequestsUpdate extends FormRequest
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
              'name' => 'required',
              'price'=>'required',
              'sale'=>'required',
              'made'=>'required',
              'description'=>'required',
              'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Vui lòng nhập tên sản phẩm',
          'price.required'=>'Vui lòng nhập giá cho sản phẩm',
          'sale.required'=>'Vui lòng nhập 0 nếu sản phẩm không có khuyến mãi',
          'made.required'=>'Vui lòng nhập thương hiệu cho sản phẩm',
          'content.required'=>'Vui lòng nhập nội dung chi tiết cho sản phẩm',
          'description.required'=>'Vui lòng nhập nội dung cho sản phẩm',
        ];
    }
}
