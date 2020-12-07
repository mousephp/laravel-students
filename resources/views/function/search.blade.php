@extends('layout.master')
@section('title','DANH SÁCH HỌC SINH')

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
    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      Tìm kiếm với từ khóa: {{$keyword}}</div>
      <div class="card-body">
        <div class="table-responsive">






          @if(count($students)>0)
          @if(count($students)>0)
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           @foreach ($students as $key => $student)
           <thead>
            <tr>
              <th>STT</th>
              <th>Images</th>
              <th>Tên</th>
              <th>ngày sinh</th>
              <th>Lớp</th>
              <th>Giáo viên chủ nhiệm</th>
              <th>Địa chỉ</th>
              <th>Hiển thị</th>
              <th>Sửa</th>
              <th>Xóa</th>
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
              <td><a href="{{asset('admin/student/show/'.$student->student_id)}}">Hiển thị</a></td>  
              <td><a href="{{asset('admin/student/edit/'.$student->student_id)}}">Sửa</a></td>    
              <td><a  onclick=" return confirm('bạn có chắc muốn xóa không') "  href="{{asset('admin/student/delete/'.$student->student_id)}}">Xóa</a></td>  
            </tr>       
          </tbody>
          @endforeach
        </table>
        @else
        <td class="alert alert-danger">Không tìm thấy bản ghi nào</td>
        @endif






        @elseif($users)
        @if(count($users)>0)
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          @foreach ($users as $key => $user)
          <thead>
            <tr>
              <tr>
                <th>STT</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Password</th>               
                <th>Sửa</th>
                <th>Xóa</th>
              </tr>
            </tr>
          </thead>
          <tbody>
           <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>   
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a href="{{asset('admin/users/show/'.$user->id)}}">Hiển thị</a></td>  
            <td><a href="{{asset('admin/users/edit/'.$user->id)}}">Sửa</a></td>    
            <td><a  onclick=" return confirm('bạn có chắc muốn xóa không') " href="{{asset('admin/users/delete/'.$user->id)}}">Xóa</a></td>    
          </tr>

        </tbody>
        @endforeach
      </table>
      @else 
      <td class="alert alert-danger">Không tìm thấy bản ghi nào</td>
      @endif
      @endif











    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<p class="small text-center text-muted my-5">
  <em>More table examples coming soon...</em>
</p>

</div>
<!-- /.container-fluid -->

</div>
@endsection