<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required',
            'repassword'=>'same:password'
        ];
    }
    public function message(){
        return [
            'email.required'=>"chua nhap email",
            'email.email'=>'chua dung dinh dang email',
            'password.required'=>"chua nhap pass",
            'repassword.same'=>"khong trung mat khau"
        ];
    }
}
