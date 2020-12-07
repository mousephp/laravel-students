<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStudentRequest extends FormRequest
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
            'student_image'=>'required|image', //bail
            'student_name'=>'required|min:5|max:30|unique:students,student_name',
            'student_age'=>'required',
            'student_class'=>'required|min:5|max:50',
            'student_class_teacher'=>'required|alpha|min:5|max:50',
            'student_address'=>'required'
          ];
        }

        public function messages()
        {
          return [
            //
           'student_image.required'=>':attribute không được để trống',
           'student_image.image'=>':attribute không đúng định dạng',
           'student_name.max'=>':attribute phải <= 30 ký tự',   
           'student_name.min'=>':attribute phải >= 5 ký tự',   
           //'student_name.alpha'=>':attribute  không đúng định dạng',   
           'student_name.unique'=>':attribute không được trùng',   

           'student_age.required'=>':attribute không được để trống',

           'student_class.required'=>':attribute không được để trống',
           'student_class.image'=>':attribute không đúng định dạng',
           'student_class.max'=>':attribute phải <= 50 ký tự',   
           'student_class.min'=>':attribute phải >= 5 ký tự',   

           'student_class_teacher.required'=>':attribute không được để trống',
           'student_class_teacher.image'=>':attribute không đúng định dạng',
           'student_class_teacher.max'=>':attribute phải <= 50 ký tự',   
           'student_class_teacher.min'=>':attribute phải >= 5 ký tự',   
          
           'student_address.required'=>':attribute không được để trống'
         ];
       }

       public function attributes(){
        return [
          'student_image' => 'Ảnh', 
          'student_name' => 'Tên', 
          'student_age' => 'Tuổi',
          'student_class' => 'Tên lớp', 
          'student_class_teacher' => 'Tên giáo viên chủ nhiệm', 
          'student_address' => 'Địa chỉ'        
        ];
      }






    }
