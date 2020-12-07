@extends('layout.master')
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
    
    <!-- Icon Cards-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-comments"></i>
            </div>
            <div class="mr-5">26 New Messages!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-list"></i>
            </div>
            <div class="mr-5">11 New Tasks!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-shopping-cart"></i>
            </div>
            <div class="mr-5">123 New Orders!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-life-ring"></i>
            </div>
            <div class="mr-5">13 New Tickets!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>

    <!-- Area Chart Example-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-area"></i>
      Area Chart Example</div>
      <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      Data Table Example</div>
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
            @endforeach


          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Your Website 2019</span>
    </div>
  </div>
</footer>

</div>
<!-- /.content-wrapper -->
@endsection
