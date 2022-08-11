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
            <b>BERITA</b>
            </div>
        </section>
            @section('content')
            <section class="section">
            <div class="container mt-5" style="margin-right: 50px; background-color:#DCDCDC" >
            <div class="row" style="margin-left: 250px;">
            <form action="{{route('editor.edit',$berita->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <br></br>
                    <label>MASUKAN JUDUL BERITA</label>
                    <input type="text" name="judul" class="form-control" required="" value="{{$berita->judul}}" >
                </div>
                <div class="form-group">
                    <label>MASUKAN AUTHOR BERITA</label>
                    <input type="text" name="author" class="form-control" required="" value="{{$berita->author}}" >
                </div>
                <div class="form-group">
                    <label>MASUKAN ISI BERITA</label>
                    <textarea class="form-control" name="isi" required="">{{$berita->isi}}</textarea>
                </div>
                <div class="form-group">
                    <label>MASUKAN KATEGORI</label>
                    <select name="kategori" class="form-control">
                        <option value="{{$berita->kategori->id}}">{{$berita->kategori->nama}}</option>
                        @foreach($data as $d)
                        <option value="{{$d->id}}">{{$d->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>MASUKAN FOTO</label>
                    <img src="{{asset('foto/'.$berita->foto)}}" style="width: 500px; height: 250px;">
                    <br></br>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label>TOP NEWS</label>
                    <select name="news" class="form-control">
                        <option>{{$berita->top_news}}</option>
                        <option>aktif</option>
                        <option>tidak aktif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>STATUS</label>
                    <select name="status" class="form-control">
                        <option>{{$berita->status}}</option>
                        <option>aktif</option>
                        <option>tidak aktif</option>
                    </select>
                </div>
                <input type="submit" value="SIMPAN" class="btn btn-info">
            </form>
            @endsection