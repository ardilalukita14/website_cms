@extends('saran.app')
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
            <b>BERITA</b>
            </div>
        </section>
            @section('content')
            <section class="section">
            <div class="container mt-5">
                    <div class="row" style="margin-left: 150px;">
                        <div class="col-md-8">
                            <a href="{{route('penulis.create')}}" class="btn btn-info">TAMBAH BERITA</a>
                        </div>
                        <div class="col-md-4">
                        <form action="{{route('penulis.berita')}}" class="row g-3" method="GET">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="cari" class="form-control" placeholder="Masukan Judul Berita">
                                </div>
                            </form>
                        </div>
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success" style="margin-left:150px">
                            <p>{{Session::get('success')}}</p>
                        </div>
                    @endif
                    <br>

                    <table class="table table-striped" style="margin-left: 120px;">
                        <tr class="table-info">
                            <th>JUDUL</th>
                            <th>AUTHOR</th>
                            <th>KATEGORI</th>
                            <th>TANGGAL</th>
                            <th width="220px">AKSI</th>
                        </tr>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->judul}}</td>
                            <td>{{$d->author}}</td>
                            <td>{{$d->kategori->nama}}</td>
                            <td>{{$d->tanggal}}</td>
                            <td>
                                <a href="{{route('penulis.show',$d->id)}}" class="btn btn-info btn-sm">DETAIL</a>
                                <a href="{{route('penulis.delete',$d->id)}}" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini ?')" >HAPUS</a>
                                <a href="{{route('penulis.edit',$d->id)}}" class="btn btn-success btn-sm">EDIT</a>
                            </td>
                        </tr>
                        @endforeach
                </table>

                    <br>
                    <p class="text-asmara>{{$data->links()}}</p>
            @endsection

