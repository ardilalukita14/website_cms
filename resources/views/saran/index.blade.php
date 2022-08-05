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
            <b>SARAN DAN KRITIK</b>
            </div>
            @section('content')
            <div class="float-left my-4 mx-5">
                <form action="{{route('saran.index')}}" class="row g-3" method="GET">
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
                
        <div class="col-xl-12 col-md-12">
          

                <table class="table table-bordered" style="background-color: #FFDAB9; margin-left: 100px;">
                    <tr>
                        <th width="800px">Nama</th>
                        <th width="">Email</th>
                        <th width="2000px">Pesan</th>
                        <th width="400px">Subjek Email</th>
                        <th width="1000px">Action</th>
                    </tr>
                    @foreach ($saran as $data)
                    <tr>

                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->pesan }}</td>
                        <td>{{ $data->subjek}}</td>
                        <td>
                       
                        <form action="{{ route('saran.destroy',$data->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('saran.show',$data->id) }}">Show</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>

                    </tr>
                    @endforeach
                </table>

            </div>
@endsection

