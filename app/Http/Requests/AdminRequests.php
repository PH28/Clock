<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class AdminRequests extends FormRequest
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
          'password'  => 'required|min:6|confirmed',     // xác nhận lại mật khẩu(validation)
          'password_confirmation'  => 'required|min:4',
          'level'  => 'required',
          'status'  => 'required',
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
        'password.confirmed'  => 'Mật khẩu không khớp',
        'password_confirmation.required'  => 'Vui lòng nhập lại mật khẩu',
        'password_confirmation.min'  => 'Mật khẩu phải lớn hơn 6 ký tự',
        'level.required'  => 'Vui lòng chọn quyền cho tài khoản',
        'status.required'  => 'Vui lòng chọn checkbox quyền cho tài khoản',
        ];
    }
}
