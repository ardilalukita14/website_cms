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
            <b>KATEGORI</b>
            </div>
        </section>
            @section('content')
            <section class="section">
			<div class="container mt-5" style="margin-right: 65px; background-color:#DCDCDC" >
			<form action="{{route('admin.do_edit_kategori',$data->id)}}" method="post" style="margin-left: 20px;">
			{{csrf_field()}}
			<br></br>
			<div class="form-group">
				<label>Masukan Nama Kategori</label>
				<input type="text" name="nama" class="form-control" required="" value="{{$data->nama}}">
			</div>
			<div class="form-group">
				<label>Masukan Keterangan Kategori</label>
				<textarea class="form-control" name="ket" required="" style="height: 150px">{{$data->keterangan}}</textarea>
			</div>
			<div class="form-group">
				<label>Masukan Status</label>
				<select class="form-control" name="status">
					<option>{{$data->status}}</option>
					<option>aktif</option>
					<option>disable</option>
				</select>
			</div>
			<input type="submit" value="SIMPAN" class="btn btn-info btn-sm">
			<br></br>
		</form>
		@endsection