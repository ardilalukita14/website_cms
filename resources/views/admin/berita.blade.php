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



    <section class="section">
      <div class="container mt-2">
        <div class="row">
          <div class="col-12 col-sm-12 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            <b>BERITA</b>
            </div>
        </section>
            @section('content')
            <section class="section">
            <div class="container mt-5">
                    <div class="row" style="margin-left: 150px;">
                     <!-- Form Search -->
                    <form action="{{route('admin.berita')}}" class="row g-3" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- End Form Search -->
        </div>
    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success" style="margin-left:150px">
                            <p>{{Session::get('success')}}</p>
                        </div>
                    @endif
                    <br>

                    <div class="container">
                        <table class="table table-striped" style="margin-left: 120px;">
                            <thead>    
                            <tr class="table-info">
                                <th>JUDUL</th>
                                <th>AUTHOR</th>
                                <th>KATEGORI</th>
                                <th>TANGGAL</th>
                                <th width="250px">AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                             @foreach($data as $d)
                        <tr>
                            <td>{{$d->judul}}</td>
                            <td>{{$d->author}}</td>
                            <td>{{$d->kategori->nama}}</td>
                            <td>{{$d->tanggal}}</td>
                            <td>
                                <a href="{{route('admin.show',$d->id)}}" class="btn btn-info btn-sm">DETAIL</a>
                                <a href="{{route('admin.delete',$d->id)}}" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini ?')" >HAPUS</a>
                                <a href="{{route('admin.edit',$d->id)}}" class="btn btn-success btn-sm">EDIT</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination" style="margin-left:120px">{{ $data->links() }}</div>
            </div>
        </body>
</html>
 @endsection

