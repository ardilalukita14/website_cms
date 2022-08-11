@extends('admin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@include('layoutsadmin.sidebar')
<!-- Form Search -->
<section class="section">
      <div class="container mt-3" style= "margin : auto">
        <div class="row">
          <div class="col-12 col-sm-12 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            <b>BERITA</b>
            </div>
            @section('content')
            <br></br>
            <div class="container mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="card" style="width: 50rem; margin-left: 150px;">
                        <div class="card-header">
                            <h5 style="font-size: 18px; font-family: Arial, Helvetica;"><b>Detail Data Berita</h5></b>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 16px;"><b>Judul Berita: </b>{{$data->judul}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Author Berita: </b>{{$data->author}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Tanggal Terbit: </b>{{$data->tanggal}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Isi Berita: </b>{{$data->isi}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Berita Populer: </b>{{$data->top_news}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Status Berita: </b>{{$data->status}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Kategori Berita: </b>{{$data->kategori->nama}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Foto Berita</li>
                                <li class="list-group-item"><img style="width: 200px" src="{{asset('foto/'.$data->foto)}}"></li>
                            </ul>
                        </div>
                        <a class="btn btn-success mt-3" href="{{ route('admin.berita') }}" style="font-size: 16px; margin-left: 40px">Kembali</a>
                    </div>
                </div>
            </div>
            @endsection