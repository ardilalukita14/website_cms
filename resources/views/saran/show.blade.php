@extends('saran.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@include('layoutsadmin.sidebar')
<section class="section">
      <div class="container mt-3" style= "margin : auto">
        <div class="row">
          <div class="col-12 col-sm-12 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            <b>SARAN DAN KRITIK</b>
            </div>

            @section('content')
            <br></br>
            <div class="container mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="card" style="width: 50rem; margin-left: 150px">
                        <div class="card-header">
                            <h5 style="font-size: 18px; font-family: Arial, Helvetica"><b>Detail Data Saran Pengunjung</h5></b>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 16px;"><b>Nama: </b>{{$saran->nama}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Email: </b>{{$saran->email}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Subjek: </b>{{$saran->subjek}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Pesan: </b>{{$saran->pesan}}</li>
                            </ul>
                        </div>
                        <a class="btn btn-success mt-3" href="{{ route('saran.index') }}" style="font-size: 16px;">Kembali</a>
                    </div>
                </div>
            </div>
@endsection
