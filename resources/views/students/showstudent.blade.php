			@extends('layout.master')
			@section('title','HIỂN THỊ  HỌC SINH')

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
						<h2>HIỂN THỊ HỌC SINH</h2>
						<hr>
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>STT</th>
									<th>Images</th>
									<th>Tên</th>
									<th>ngày sinh</th>
									<th>Lớp</th>
									<th>Giáo viên chủ nhiệm</th>
									<th>Địa chỉ</th>
								</tr>
							</thead>
							<tbody>            
								<tr>
									<td>{{$student->student_id}}</td>
									<td><img src="../upload/{{$student->student_image}}" style="width: 150px;"></td>
									<td>{{$student->student_name}}</td>
									<td>{{$student->student_age}}</td>
									<td>{{$student->student_class}}</td>
									<td>{{$student->student_class_teacher}}</td>
									<td>{{$student->student_address}}</td>             
								</tr>          
							</tbody>
						</table>


					</div><!-- /.container-fluid -->
				</div>
			</div>

			@endsection




