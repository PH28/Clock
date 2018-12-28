<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class UserRequests extends FormRequest
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
          'email'  => 'required|email|unique:users',
          'address'=>'required|min:3',
          'password'  => 'required|min:6|confirmed',
          'password_confirmation'  =>'required',
        ];
    }
    public function messages()
    {
        return [
          'name.required'   => 'Vui lòng nhập họ tên',
          'name.min'   => 'Họ tên lớn hơn 3 ký tự.',
          'phone.required'=>'Vui lòng nhập số điện thoại',
          'phone.min'=>'Số điện thoại không nhỏ hơn 3',
          'email.required'  => 'Vui lòng nhập email',
          'email.email'  => 'Vui lòng nhập đúng email',
          'email.unique'  => 'Email đã tồn tại',
          'password.required'  => 'Vui lòng nhập mật khẩu',
          'password.min'  => 'Mật khẩu phải lớn hơn 6 ký tự',
          'password_confirmation.required'  => 'Vui lòng xác nhận mật khẩu',
          'password_confirmation.confirmed'  => 'Mật khẩu không khớp',
        ];
    }
}
