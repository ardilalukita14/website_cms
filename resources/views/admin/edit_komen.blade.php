<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>BeRiKoMa</title>
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
	<br></br>
</form>
@endsection