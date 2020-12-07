@extends('layout.master')
@section('title','SỬA USER')

@section('content')
<div id="content-wrapper">


	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Overview</li>
		</ol>

		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<h2 class="text-center">SỬA USER</h2>
				{{--@include('note')--}}
				@include('../messages/notification')
				{{--@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif--}}
					<form class="form-horizontal" action="" method="post">
						@csrf
						<div class="form-group ">
							<label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-8 ">
								<input  class="form-control"  type="text" readonly value="{{$user->name}}" name="user_name" placeholder="Nhập Username">
								@if ($errors->has('user_name'))
								<p class="alert alert-danger">{{ $errors->first('user_name') }}</p>
								@endif
							</div>
						</div>
						<div class="form-group ">
							<label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-8">
								<input class="form-control" type="email"  value="{{$user->email}}" id="example-text-input" name="user_email" placeholder="Nhập Email">
								@if ($errors->has('user_email'))
								<p class="alert alert-danger">{{ $errors->first('user_email') }}</p>
								@endif
							</div>
						</div>
						<div class="form-group ">
							<label for="example-text-input" class="col-sm-4 col-form-label">Nhập Password cũ</label>
							<div class="col-sm-8">
								<input class="form-control" type="password"  value="" id="example-text-input" name="user_password" placeholder="Nhập Password">
								@if ($errors->has('user_password'))
								<p class="alert alert-danger">{{ $errors->first('user_password') }}</p>
								@endif
							</div>
						</div>	
						<div class="form-group ">
							<label for="example-text-input" class="col-sm-4 col-form-label">Nhập Password mới</label>
							<div class="col-sm-8">
								<input class="form-control" type="password"  value="" id="example-text-input" name="user_password_new" placeholder="Nhập Password mới">
								@if ($errors->has('user_password_new'))
								<p class="alert alert-danger">{{ $errors->first('user_password_new') }}</p>
								@endif
							</div>
						</div>
						<div class="form-group ">
							<label for="example-text-input" class="col-sm-4 col-form-label">Xác nhận Password mới</label>
							<div class="col-sm-8">
								<input class="form-control" type="password"  value="" id="example-text-input" name="user_password_again" placeholder="Xác nhận Password mới">
								@if ($errors->has('user_password_again'))
								<p class="alert alert-danger">{{ $errors->first('user_password_again') }}</p>
								@endif
							</div>
						</div>	
						<div class="form-group text-center">
							<div class="col-sm-8">
								<input type="reset" name="btnnhaplaiuser" value="Nhập lại"  class="btn btn-lg btn-danger">
								<input type="submit" name="btnthemuser" value="Sửa user" class="btn btn-lg btn-success">
							</div>
						</div>	

					</form>

				</div>
			</div>
		</div>
	</div>
	@endsection









