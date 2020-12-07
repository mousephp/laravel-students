	<?php

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/

	Route::get('/', function () {
		return view('welcome');
	});
	// Route::get('login',function(){
	// 	return view('login');
	// });
/*
http://localhost:8080/thuctapAdnet/Laravel/quanlyhocsinh/public/admin
http://localhost:8080/thuctapAdnet/Laravel/quanlyhocsinh/public/login
vanhung@gmail.com/123456
hangnga@gmail.com/12345678
*/


	Route::get('search','Admin\StudentController@getSearchStudent');
	//Route::get('search-user','Admin\StudentController@getSearchUser');

	Route::group(['namespace'=>'Admin'],function(){

		Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
			Route::get('/','LoginController@getLogin');
			Route::post('/','LoginController@postLogin');
		});

		Route::get('logout','HomeController@getLogout');

		Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){	
			
			Route::get('/','HomeController@getHome');
			Route::get('/','StudentController@getStudent');

			Route::group(['prefix'=>'student'],function(){	
				Route::get('/','StudentController@getshowStudent');	
				Route::get('add','StudentController@getAddStudent');
				Route::post('add','StudentController@postAddStudent');

				Route::get('edit/{id}','StudentController@getEditStudent');
				Route::post('edit/{id}','StudentController@postEditStudent');
				Route::get('show/{id}','StudentController@getShowIdStudent');

				Route::get('delete/{id}','StudentController@getDeleteStudent');

			});

			Route::group(['prefix'=>'users'],function(){
				Route::get('/','UserController@getShowUser');
				Route::get('add','UserController@getAddUser');
				Route::post('add','UserController@postAddUser');

				Route::get('edit/{id}','UserController@getEditUser');
				Route::post('edit/{id}','UserController@postEditUser');

				Route::get('password','UserController@getUpdatePasswordUser');
				Route::post('password','UserController@postUpdatePasswordUser');
				Route::get('show/{id}','UserController@getShowIdUser');

				Route::get('delete/{id}','UserController@getDeleteUser');
			});

		});



	});
















