@extends('admin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@include('editor.sidebar')
  
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">BeRiKoMa</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../dist/img/avatar/people.png" width="30px" height="50px">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name" style= "font-size: 18px; font-family: Arial, Helvetica>Profile">{{ Auth::user()->name }}</div>
              <div class="user-role" style= "font-size: 12px; font-family: Arial, Helvetica>Profile">
              {{ Auth::user()->role }}
              </div>
            </div>
          </div>

@include('editor.sidebar')

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
                        <!-- <div class="col-md-8">
                            <a href="{{route('admin.create')}}" class="btn btn-info">TAMBAH BERITA</a>
                        </div> -->
                        <div class="col-md-4">
                        <form action="{{route('editor.berita')}}" class="row g-3" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                        </span>
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
                            <th width="250px">AKSI</th>
                        </tr>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->judul}}</td>
                            <td>{{$d->author}}</td>
                            <td>{{$d->kategori->nama}}</td>
                            <td>{{$d->tanggal}}</td>
                            <td>
                                <a href="{{route('editor.show',$d->id)}}" class="btn btn-info btn-sm">DETAIL</a>
                                <a href="{{route('editor.delete',$d->id)}}" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini ?')" >HAPUS</a>
                                <a href="{{route('editor.edit',$d->id)}}" class="btn btn-success btn-sm">EDIT</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
                <div class="pagination" style="margin-left:120px">{{ $data->links() }}</div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>

@endsection