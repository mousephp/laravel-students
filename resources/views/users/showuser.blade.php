			@extends('layout.master')
			@section('title','DANH SÁCH USER')

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
						<h2>HIỂN THỊ USER</h2>
						<hr>
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>STT</th>
									<th>FullName</th>
									<th>Email</th>
									<th>Password</th>			                
								</tr>
							</thead>
							
							<tbody>            
								<tr>
									<td>{{$user->id}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->password}}</td>			                         
								</tr>          
							</tbody>
						</table>
						

					</div><!-- /.container-fluid -->
				</div>
			</div>
			
			@endsection




