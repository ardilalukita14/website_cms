@extends('layoutsadmin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@section('content')
@include('layoutsadmin.sidebar')
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Chart.JS</div>
          </h1>

          <div class="section-body">
            <div class="card">
              <div class="card-body">
                <div class="alert alert-info mb-0">
                  We use 'Chart.JS' made by @chartjs. You can check the full documentation <a href="http://www.chartjs.org/">here</a>.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Line Chart</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Bar Chart</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart2"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Doughnut Chart</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart3"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Pie Chart</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart4"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection