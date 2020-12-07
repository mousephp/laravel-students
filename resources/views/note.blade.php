@if(Session::has('error'))
<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif

@foreach($errors->all() as $error)
<p class="alert alert-danger">{{$error}}</p>
@endforeach



@if(Session::has('thongbao'))
<p class="alert alert-success">{{Session::get('thongbao')}}</p>
@endif

@foreach($errors->all() as $thongbao)
<p class="alert alert-success">{{$thongbao}}</p>
@endforeach




