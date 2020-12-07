@extends('layout.master')
@section('title','THÊM HỌC SINH')

@section('content')
<div id="content-wrapper">

	<div class="container">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Overview</li>
		</ol>
		<div class="col-sm-12">
			<h2>THÊM HỌC SINH</h2>
			<hr>
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

				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group ">
						<label for="example-text-input" class="col-sm-2 col-form-label">Images</label>
						<div class="col-sm-8 ">
							<input  class="form-control"   type="file"  id="fileToUpload" multiple="multiple" name="student_image">
							@if ($errors->has('student_image'))
							<p class="alert alert-danger">{{ $errors->first('student_image') }}</p>
							@endif
						</div>				
					</div>
					<div class="form-group ">
						<label for="example-text-input" class="col-sm-2 col-form-label">Họ và Tên</label>
						<div class="col-sm-8">
							<input class="form-control" type="text"  value="{{old('student_name')}}" id="example-text-input" name="student_name" placeholder="NHập họ và tên">
							@if ($errors->has('student_name'))
							<p class="alert alert-danger">{{ $errors->first('student_name') }}</p>
							@endif
						</div>
					</div>	
					<div class="form-group ">
						<label for="example-text-input" class="col-sm-2 col-form-label">ngày sinh</label>
						<div class="col-sm-8">
							<input class="form-control" type="date"  value="{{old('student_age')}}" id="example-text-input" name="student_age" placeholder="Nhập ngày sinh">
							@if ($errors->has('student_age'))
							<p class="alert alert-danger">{{ $errors->first('student_age') }}</p>
							@endif
						</div>
					</div>
					<div class="form-group ">
						<label for="example-text-input" class="col-sm-2 col-form-label">Lớp</label>
						<div class="col-sm-8">
							<input class="form-control" type="text"  value="{{old('student_class')}}" id="example-text-input" name="student_class" placeholder="Nhập lớp học">
							@if ($errors->has('student_class'))
							<p class="alert alert-danger">{{ $errors->first('student_class') }}</p>
							@endif
						</div>
					</div>

					<div class="form-group ">
						<label for="example-search-input" class="col-sm-4 col-form-label">Giáo viên chủ nhiệm</label>
						<div class="col-sm-8">
							<input class="form-control" type="search"  value="{{old('student_class_teacher')}}" id="example-search-input" name="student_class_teacher" placeholder="Nhập giáo viên chủ nhiệm">
							@if ($errors->has('student_class_teacher'))
							<p class="alert alert-danger">{{ $errors->first('student_class_teacher') }}</p>
							@endif
						</div>
					</div>
					<div class="form-group ">
						<label for="example-text-input" class="col-sm-2 col-form-label">Địa chỉ</label>
						<div class="col-sm-8">
							<textarea class="form-control"  id="exampleFormControlTextarea1" value="" rows="3" name="student_address" placeholder="Nhập địa chỉ">{{old('student_address')}}</textarea>
							@if ($errors->has('student_address'))
							<p class="alert alert-danger">{{ $errors->first('student_address') }}</p>
							@endif
						</div>
					</div>
					<input type="reset" name="" value="Nhập lại"  class="btn btn-lg btn-danger">
					<input type="submit" name="" value="Thêm" class="btn btn-lg btn-success">

				</form>

			</div>

		</div><!-- /.container-fluid -->

	</div>
	@endsection




