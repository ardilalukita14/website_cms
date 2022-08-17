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
@section('content')<!DOCTYPE html>
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
        <div class="container mt-5">
		<div class="row" style="margin-left: 150px;">
			<div class="col-md-8">
				<button class="btn btn-info" data-toggle="modal" data-target="#modal">TAMBAH</button>
			</div>
			<div class="col-md-4">
				<form action="{{route('admin.carikategori')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Kategori">
					</div>
				</form>
			</div>
		</div>
		@if(Session::has('success'))
			<div class="alert alert-success" style="margin-left:165px">
				<p>{{Session::get('success')}}</p>
			</div>
		@endif
		<br>
		<table class="table table-striped" style="margin-left: 120px;">
			<tr class="table-info">
				<th>NAMA</th>
				<th>KETERANGAN</th>
				<th>STATUS</th>
				<th>TANGGAL</th>
				<th>AKSI</th>
			</tr>
			@foreach($data as $d)
			<tr>
				<td>{{$d->nama}}</td>
				<td>{{$d->keterangan}}</td>
				<td>{{$d->status}}</td>
				<td>{{$d->tanggal}}</td>
				<td width="250px">
					<a href="{{route('admin.delete_kategori',$d->id)}}" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini ?')" class="btn btn-warning btn-sm">HAPUS</a>
					<a href="{{route('admin.edit_kategori',$d->id)}}" class="btn btn-info btn-sm">EDIT</a>
				</td>
			</tr>
			@endforeach
		</table>
		<div class="pagination" style="margin-left:120px">{{ $data->links() }}</div>
		@endsection
		<div class="modal fade" id="modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<p><b>TAMBAH DATA KATEGORI</b></p>
					</div>
					<div class="modal-body">
						<form action="{{route('admin.do_ketagori')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<label>Masukan Nama Kategori</label>
								<input type="text" name="nama" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Masukan Keterangan Kategori</label>
								<textarea class="form-control" name="ket" required="" style="height: 150px"></textarea>
							</div>
							<input type="submit" value="SIMPAN" class="btn btn-info btn-sm">
						</form>
					</div>
				</div>
			</div>
		</div>