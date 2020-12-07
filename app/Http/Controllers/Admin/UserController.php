<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\RequestPassword;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
	public function getShowUser(){
		$data['users']=User::all();
		return view('users/listuser',$data);
	}

	public function getShowIdUser($id){
		$data['user']=User::find($id);
		return view('users/showuser',$data);
	}

	public function getAddUser(){
		return view('users/adduser');
	}

	public function postAddUser(AddUserRequest $request){
		//die('haha');
		//Cách 1 khi không nhập lại mật khẩu
		User::create([
			'name' => $request['user_name'],
			'email' => $request['user_email'],
			'password' => bcrypt($request['user_password']),		
		]);
		return redirect()->back()->with('thongbao','Thêm thành công');	
	}		


	public function getEditUser($id){
		$data['user']=User::find($id);
		return view('users/edituser',$data);
	}

	public function postEditUser(EditUserRequest $request,$id){
		$user = User::findOrFail($id);
		$input=[
			'name' => $request['user_name'],
			'email' => $request['user_email']		
		];
		$input['password']=bcrypt($request['user_password_new']);

		User::where('id', $id)
		->update($input);		
		return redirect()->back()->with('thongbao','Sửa thành công');		
	}

	public function getDeleteUser($id){
		$dele=User::find($id);
		$dele->delete();
		return back();
	}

	public function getUpdatePasswordUser(){
		return view('auth/password');
		//	return view('users/updatepassword');
	}

	public function postUpdatePasswordUser(RequestPassword $request){
		$data = $request->all(); 
		$user = User::find(auth()->user()->id);
		if(!\Hash::check($data['user_password'], $user->password)){
			//return back()->with('error','You have entered wrong password');
			//dd('Bạn đã nhập sai mật khẩu');
			return redirect()->back()->with('error','Bạn đã nhập sai mật khẩu');
		}else{
			//dd('ở đây bạn sẽ viết mã cập nhật mật khẩu');
			$user->password=bcrypt($request->user_password_again);
			$user->save();
			return redirect()->back()->with('thongbao','Cập nhâp mật khẩu thành công');	
		}
	}
	//tutsmake.com/laravel-check-old-password-and-updating-a-new-password/
}
