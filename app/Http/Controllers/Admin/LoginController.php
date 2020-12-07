<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    
	public function getLogin(){
		return view('auth/login');
	}
	public function postLogin(Request $request){
		$arr=['email'=>$request->email,'password'=>$request->password];
		if ($request->remember='remember-me') {
			$remember=true;
		}else{
			$remember=false;
		}
		if (Auth::attempt($arr,$remember)) {
			return redirect()->intended('admin/student');
		}else{
			return back()->withInput()->with('error','Tai khoan hoac mat khau khong dung');
		}
	}

}
