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
@include('penulis.sidebar')
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Dashboard</div>
          </h1>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-primary">
                  <i class="ion ion-person fa-3x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Main User</h4>
                  </div>
                  <div class="card-body">
                  {{$jumlah_user}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-danger">
                  <i class="ion ion-ios-email-outline fa-3x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Saran</h4>
                  </div>
                  <div class="card-body">
                  {{$jumlah_saran}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-warning">
                  <i class="ion ion-paper-airplane fa-3x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Komentar</h4>
                  </div>
                  <div class="card-body">
                   {{$jumlah_komentar}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-success">
                  <i class="ion ion-record fa-3x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Berita</h4>
                  </div>
                  <div class="card-body">
                    {{$jumlah_berita}}
                  </div>
                </div>
              </div>
            </div>                      
         
            <div class="col-lg-7 col-md-12 col-12 col-sm-12">
              <div class="card" style="margin-left:150px; width:800px;">
                <div class="card-header">
                  <div class="float-right">
                    <a href="{{ route('penulis.berita') }}" class="btn btn-primary">View All</a>
                  </div>
                  <h4>Latest Posts</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Author</th>
                          <th width="100px">Action</th>
                        </tr>
                      </thead>
                      <tbody>  
                      @foreach ($berita as $data)                        
                        <tr>
                          <td>
                            {{$data->judul}}
                            <div class="table-links">
                              Berita <a href="/penulis/berita">BeRiKoMa</a>
                              <div class="bullet"></div>
                              <a href="/penulis/berita">View</a>
                            </div>
                          </td>
                          <td>
                            <a href="#"> {{$data->author}}</a>
                          </td>
                          <td>
                            <a href="{{ route('penulis.show',$data->id) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                            <a href="{{ route('penulis.berita') }}"class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>
@endsection