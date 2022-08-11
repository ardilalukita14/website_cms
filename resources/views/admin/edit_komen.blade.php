@extends('admin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@include('layoutsadmin.sidebar')
<!-- Form Search -->
<section class="section">
      <div class="container mt-2">
        <div class="row">
          <div class="col-12 col-sm-12 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            <b>KOMENTAR</b>
            </div>
        </section>
            @section('content')
            <section class="section">
            <div class="container mt-5" style="margin-right: 60px; background-color:#DCDCDC" >
            <div class="row" style="margin-left: 150px;">
            <form action="{{route('admin.do_editkomen',$data->id)}}" method="post" style="width: 800px;">
	{{csrf_field()}}
    <br></br>
	<div class="form-group">
		<textarea class="form-control" name="isi" readonly="">{{$data->keterangan}}</textarea>
	</div>
	<div class="form-group">
		<input type="text" name="nama" readonly="" value="{{$data->nama}}"  class="form-control">
	</div>
	<div class="form-group">
		<input type="email" name="email" readonly="" class="form-control" value="{{$data->email}}" >
	</div>
	<div class="form-group">
		<select class="form-control" name="status">
			<option>{{$data->status}}</option>
			<option>aktif</option>
			<option>non aktif</option>
		</select>
	</div>
	<input type="submit" value="KIRIM" class="btn btn-info">
</form>
@endsection