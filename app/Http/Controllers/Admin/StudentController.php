<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddStudentRequest;
use App\Http\Requests\EditStudentRequest;
use App\Models\Student;
use App\User;

class StudentController extends Controller
{
    //
	public function getStudent(){
        $data['students']=Student::all();
        return view('students/index',$data);
    }
    public function getshowStudent(){
        $data['dem']=1;
        $data['students']=Student::all();
        return view('students/liststudent',$data);
    }

    public function getShowIdStudent($id){
        $data['student']=Student::find($id);
        return view('students/showstudent',$data);
    }

    public function getAddStudent(){
        return view('students/addstudent');
    }
    public function postAddStudent(AddStudentRequest $request){
		//Student::create($request->all());

        $imageHs=new Student;
        $imageHs->student_name=$request->student_name;
        $imageHs->student_age=$request->student_age;
        $imageHs->student_class=$request->student_class;
        $imageHs->student_class_teacher=$request->student_class_teacher;
        $imageHs->student_address=$request->student_address;

    	if($request->hasFile('student_image')) // Kiểm tra xem người dùng có upload hình hay không
    	{
    		$imgFile = $request->file('student_image'); // Nhận file hình ảnh người dùng upload lên server
    		
    		$imgFileExtension = $imgFile->getClientOriginalExtension(); // Lấy đuôi của file hình ảnh

    		if($imgFileExtension != 'png' && $imgFileExtension != 'jpg' && $imgFileExtension != 'jpeg')
    		{
    			return back()->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
    		}

    		$imgFileName = $imgFile->getClientOriginalName(); // Lấy tên của file hình ảnh

    		$randomFileName  = str_random(4).'_'.$imgFileName; // Random tên file để tránh trường hợp trùng với tên hình ảnh khác trong CSDL
    		while(file_exists('upload/'.$randomFileName)) // Trường hợp trên gán với 4 ký tự random nhưng vẫn có thể xảy ra trường hợp bị trùng, nên bỏ vào vòng lặp while để kiểm tra với tên tất cả các file hình trong CSDL, nếu bị trùng thì sẽ random 1 tên khác đến khi nào ko trùng nữa thì thoát vòng lặp
    		{
    			$randomFileName  = str_random(4).'_'.$imgFileName;
    		}
    		echo $randomFileName ;

    		$imgFile->move('upload',$randomFileName); // file hình được upload sẽ chuyển vào thư mục có đường dẫn như trên
    		$imageHs->student_image = $randomFileName;
    	}else{
    		$imageHs->student_image= ''; // Nếu người dùng không upload hình thì sẽ gán đường dẫn là rỗng
        }

        $imageHs->save();
        return redirect()->back()->with('thongbao','Thêm thành công');
    }


    public function getEditStudent($id){
        $data['student']=Student::find($id);
        return view('students/editstudent',$data);
    }

    public function postEditStudent(EditStudentRequest $request,$id){

        $imageHs=Student::find($id);
        $imageHs->student_name=$request->student_name;
        $imageHs->student_age=$request->student_age;
        $imageHs->student_class=$request->student_class;
        $imageHs->student_class_teacher=$request->student_class_teacher;
        $imageHs->student_address=$request->student_address;

        if($request->hasFile('student_image')) // Kiểm tra xem người dùng có upload hình hay không
        {
            $imgFile = $request->file('student_image'); // Nhận file hình ảnh người dùng upload lên server
            
            $imgFileExtension = $imgFile->getClientOriginalExtension(); // Lấy đuôi của file hình ảnh

            if($imgFileExtension != 'png' && $imgFileExtension != 'jpg' && $imgFileExtension != 'jpeg')
            {
                return back()->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }

            $imgFileName = $imgFile->getClientOriginalName(); // Lấy tên của file hình ảnh

            $randomFileName  = str_random(4).'_'.$imgFileName; // Random tên file để tránh trường hợp trùng với tên hình ảnh khác trong CSDL
            while(file_exists('upload/'.$randomFileName)) // Trường hợp trên gán với 4 ký tự random nhưng vẫn có thể xảy ra trường hợp bị trùng, nên bỏ vào vòng lặp while để kiểm tra với tên tất cả các file hình trong CSDL, nếu bị trùng thì sẽ random 1 tên khác đến khi nào ko trùng nữa thì thoát vòng lặp
            {
                $randomFileName  = str_random(4).'_'.$imgFileName;
            }
            echo $randomFileName ;
            if($imgFileName>0){
              unlink('upload/'.$imageHs->student_image); // Xóa hình cũ
          }

            $imgFile->move('upload',$randomFileName); // file hình được upload sẽ chuyển vào thư mục có đường dẫn như trên
            $imageHs->student_image = $randomFileName; // Lưu lại hình mới

        }
           // Không có else vì nếu người dùng không muốn thay đổi lại hình khác thì vẫn giữ lại đường dẫn hình cũ, gán mặc định như trên sẽ làm mất đường dẫn hình

        $imageHs->save();
        return redirect()->back()->with('thongbao','Sửa thành công');
    }

    public function getDeleteStudent($id){
        $student=Student::find($id);
        $student->delete();
        return redirect()->back();
    }

    public function getSearchStudent(Request $request){
     $search['keyword']=$request->result;   
     $search['students']=Student::where('student_name','like','%'.$request->result.'%')->orWhere('student_address','like','%'.$request->result.'%')->get();
       //return view('students.search',$student);

     $search['users']=User::where('name','like','%'.$request->result.'%')->get();
      // return view('students.search',$student);


     return view('function.search',$search);
 }







}
