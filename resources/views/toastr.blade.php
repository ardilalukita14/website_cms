@extends('layoutsadmin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@section('content')
@include('layoutsadmin.sidebar')
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Toastr</div>
          </h1>
          <div class="section-body">
            <div class="card">
              <div class="card-body">
                <div class="alert alert-info mb-0">
                  We use 'Toastr' made by @CodeSeven. You can check the full documentation <a href="http://www.toastrjs.com/">here</a>.
                </div>
              </div>
            </div>
            <h2 class="section-title">Toastr</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Info Message</div>
                    <button class="btn btn-primary" onclick="toastr.info('This awesome plugin is made by toastr', 'Hello, world!');">Launch</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Success Message</div>
                    <button class="btn btn-primary" onclick="toastr.success('This awesome plugin is made by toastr', 'Hello, world!');">Launch</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Warning Message</div>
                    <button class="btn btn-primary" onclick="toastr.warning('This awesome plugin is made by toastr', 'Hello, world!');">Launch</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Error Message</div>
                    <button class="btn btn-primary" onclick="toastr.error('This awesome plugin is made by toastr', 'Hello, world!');">Launch</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Toastr Right Bottom</div>
                    <button class="btn btn-primary" onclick="toastr.info('This awesome plugin is made by toastr', 'Hello, world!', { positionClass: 'toast-bottom-right' });">Launch</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Toastr Center Bottom</div>
                    <button class="btn btn-primary" onclick="toastr.info('This awesome plugin is made by toastr', 'Hello, world!', { positionClass: 'toast-bottom-center' });">Launch</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Toastr Left Bottom</div>
                    <button class="btn btn-primary" onclick="toastr.info('This awesome plugin is made by toastr', 'Hello, world!', { positionClass: 'toast-bottom-left' });">Launch</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Toastr Top Center</div>
                    <button class="btn btn-primary" onclick="toastr.error('This awesome plugin is made by toastr', 'Hello, world!',{ positionClass: 'toast-top-center' });">Launch</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection