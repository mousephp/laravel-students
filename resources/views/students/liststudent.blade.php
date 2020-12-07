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
      DANH SÁCH HỌC SINH</div>
      <div class="card-body">
        <div class="table-responsive">
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
                <th>Hiển thị</th>
                <th>Sửa</th>
                <th>Xóa</th>
              </tr>
            </thead>
            <tfoot>
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
            </tfoot>
            <tbody>
              @foreach ($students as $key => $student)
              <tr>
                <td>{{$dem++}}</td>
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
              @endforeach

            </tbody>
          </table>
        </table>
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