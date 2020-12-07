<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'user_name'=>'required|alpha|min:5|max:30|unique:users,name,'.$this->id.',id', //bail
            'user_email'=>'required|email',
            'user_password'=>'required|min:5|max:50',
            'user_password_new'=>'required|min:5|max:50',//|confirmed
            'user_password_again'=>'same:user_password_new'

            // 'user_password'=>'required|min:5|max:50|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/', //nguon:https://www.5balloons.info/password-regex-validation-laravel-authentication/

            //'password_confirmation' => 'required|same:user_password', user_password == password_confirmation
          ];
        }
        public function messages()
        {
          return [
            //
           'user_name.required'=>':attribute không được để trống',
           'user_name.min'=>':attribute phải >= 5 ký tự',
           'user_name.max'=>':attribute phải < 30 ký tự',   
           'user_name.alpha'=>':attribute  không đúng định dạng',   
           'user_name.unique'=>':attribute không đươc trùng',   

           'user_email.required'=>':attribute không được để trống',
           'user_email.email'=>':attribute không đúng định dạng',

           'user_password.required'=>':attribute không được để trống',
           'user_password.min'=>':attribute phải >= 5 ký tự',
           'user_password.max'=>':attribute phải <= 50 ký tự',
           //'user_password.regex'=>':attribute không đúng định dạng',

           'user_password_new.required'=>':attribute không được để trống',
           'user_password_new.min'=>':attribute phải >= 5 ký tự',
           'user_password_new.max'=>':attribute phải <= 50 ký tự',
           //'user_password_new.confirmed'=>'password phải khớp', 
           'user_password_again.same'=>'password mới và xác nhận password phải khớp',           
         ];
       }


       public function attributes(){
        return [
          'user_name' => 'Tên', 
          'user_email' => 'email', 
          'user_password' => 'password'
        ];
      }
    }
