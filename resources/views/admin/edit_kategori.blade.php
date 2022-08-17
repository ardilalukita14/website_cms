<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>AnalisaBerita</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">

  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="../dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../dist/css/demo.css">
  <link rel="stylesheet" href="../dist/css/style.css">

</head>

<body>

  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../dist/js/sa-functions.js"></script>
  
  <script src="../dist/modules/chart.min.js"></script>
  <script src="../dist/modules/summernote/summernote-lite.js"></script>

@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@section('content')
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