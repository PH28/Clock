<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequests extends FormRequest
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
         'email'  => 'required|email',
         'password'  => 'required|min:6',
        ];
    }

    public function messages(){
  	 return [
       'email.required'  => 'Vui lòng nhập email',
       'email.email'  => 'Vui lòng nhập đúng email',
       'password.required'  => 'Vui lòng nhập mật khẩu',
       'password.min'  => 'Mật khẩu phải gồm 6 ký tự trở lên',
       // 'password.confirmed'  => 'Mật khẩu không chính xác',
      	  	];
      	}
}
