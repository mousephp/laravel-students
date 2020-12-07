@extends('layout.master')
@section('title','DANH SÁCH USER')

@section('content')
<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tables</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      DANH SÁCH USER</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
            <tfoot>
             <tr>
              <th>STT</th>
              <th>Fullname</th>
              <th>Email</th>
              <th>Password</th>             
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
          </tfoot>
          <tbody>
           @foreach ($users as $key => $user)
           <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>   
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a href="{{asset('admin/users/show/'.$user->id)}}">Hiển thị</a></td>  
            <td><a href="{{asset('admin/users/edit/'.$user->id)}}">Sửa</a></td>    
            <td><a  onclick=" return confirm('bạn có chắc muốn xóa không') " href="{{asset('admin/users/delete/'.$user->id)}}">Xóa</a></td>    
          </tr>
          @endforeach 

        </tbody>
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
<!-- /.content-wrapper -->
@endsection