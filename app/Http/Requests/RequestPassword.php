<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPassword extends FormRequest
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
            //
            'user_password'=>'required',
            'user_password_new'=>'required',
            'user_password_again'=>'required|same:user_password_new',
        ];
    }

    public function messages()
    {
        return [
            //
            'user_password.required'=>'Trường này không được để trống',
            'user_password_new.required'=>'Trường này không được để trống',
            'user_password_again.required'=>'Trường này không được để trống',
            'user_password_again.same'=>'Mật khẩu xác nhận không đúng',
        ];
    }
}
