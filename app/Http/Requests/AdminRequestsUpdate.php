<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestsUpdate extends FormRequest
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
          'name'   => 'required|min:3',
          'phone'   => 'required|min:3',
        ];
    }
    public function messages()
    {
      return [
        'name.required'   => 'Vui lòng nhập họ tên',
        'name.min'   => 'Họ tên lớn hơn 3 ký tự.',
        'phone.required'=>'Vui lòng nhập số điện thoại',
        'phone.min'=>'Số điện thoại không nhỏ hơn 3',
      ];
    }
}
