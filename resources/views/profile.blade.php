@extends('layoutsadmin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@include('layoutsadmin.sidebar')
  <!-- <div id="app"> -->
    <section class="section">
      <div class="container mt-3">
        <div class="row">
          <div class="col-12 col-sm-12 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <b>PROFILE</b>
            </div>
            @section('content')
            <div class="card card-primary">
              <div class="card-header"><h4 style= "font-size: 18px; font-family: Arial, Helvetica>Profile"></h4></div>

              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name" style="font-size: 16px;">Name</label>
                      <li class="list-group-item" disabled style="font-size: 16px;">{{ Auth::user()->name }}</li>
                    </div>

                  <div class="form-group col-12">
                    <label for="email" style="font-size: 16px;">Email</label>
                    <li class="list-group-item" disabled style="font-size: 16px;">{{ Auth::user()->email }}</li>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    <div class="form-group col-12">
                      <label for="password2" class="d-block" style="font-size: 16px;">Role</label>
                      <li class="list-group-item" disabled style="font-size: 16px;">{{ Auth::user()->role }}</li>
                    </div>
                  </div>

                  <div class="form-divider">

                  <div class="form-group">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-success" style="font-size: 16px;">
                     Update Profile
                    </button>
                  </div>
                </form>
              </div>
            </div>
   @endsection