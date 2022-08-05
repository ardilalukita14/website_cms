@extends('layoutsadmin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@section('content')
@include('layoutsadmin.sidebar')
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>General Components</div>
          </h1>

          <div class="section-body">
            <div class="jumbotron">
              <h1 class="display-5">General Bootstrap Components</h1>
              <p class="lead">Familiar with this component? Yes, all components on this page are from bootstrap. So we have documented a few bootstrap components, as more you can refer to the bootstrap documentation page.</p>
              <hr class="my-4">
              <p>We're documenting here for wanting to check bootstrap built-in components still work well on our template.</p>
              <p class="lead">
            </p>
            </div>
            <h2 class="section-title">General Components</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <div class="btn-group">
                        <a href="#default" data-tab="alerts" class="btn active">Default</a>
                        <a href="#with-title" data-tab="alerts" class="btn">With Title</a>
                        <div class="dropdown">
                          <a class="btn dropdown-toggle text-primary" data-toggle="dropdown">More</a>
                          <div class="dropdown-menu">
                            <a href="#with-icon" data-tab="alerts" class="dropdown-item">With Icon</a>
                            <a href="#dismissible" data-tab="alerts" class="dropdown-item">Dismissible</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4>Alerts</h4>
                  </div>
                  <div class="card-body">
                    <div data-tab-group="alerts" class="active" id="default">
                      <div class="alert alert-primary">
                        This is a primary alert.
                      </div>
                      <div class="alert alert-secondary">
                        This is a secondary alert.
                      </div>
                      <div class="alert alert-success">
                        This is a success alert.
                      </div>
                      <div class="alert alert-danger">
                        This is a danger alert.
                      </div>
                      <div class="alert alert-warning">
                        This is a warning alert.
                      </div>
                      <div class="alert alert-info">
                        This is a info alert.
                      </div>
                      <div class="alert alert-light">
                        This is a light alert.
                      </div>
                      <div class="alert alert-dark">
                        This is a dark alert.
                      </div>                              
                    </div>
                    <div data-tab-group="alerts" id="with-title">
                      <div class="alert alert-primary">
                        <div class="alert-title">Primary</div>
                        This is a primary alert.
                      </div>
                      <div class="alert alert-secondary">
                        <div class="alert-title">Secondary</div>
                        This is a secondary alert.
                      </div>
                      <div class="alert alert-success">
                        <div class="alert-title">Success</div>
                        This is a success alert.
                      </div>
                      <div class="alert alert-danger">
                        <div class="alert-title">Danger</div>
                        This is a danger alert.
                      </div>
                      <div class="alert alert-warning">
                        <div class="alert-title">Warning</div>
                        This is a warning alert.
                      </div>
                      <div class="alert alert-info">
                        <div class="alert-title">Info</div>
                        This is a info alert.
                      </div>
                      <div class="alert alert-light">
                        <div class="alert-title">Light</div>
                        This is a light alert.
                      </div>
                      <div class="alert alert-dark">
                        <div class="alert-title">Dark</div>
                        This is a dark alert.
                      </div>
                    </div>
                    <div data-tab-group="alerts" id="with-icon">
                      <div class="alert alert-primary alert-has-icon">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Primary</div>
                          This is a primary alert.
                        </div>
                      </div>
                      <div class="alert alert-secondary alert-has-icon">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Secondary</div>
                          This is a secondary alert.
                        </div>
                      </div>
                      <div class="alert alert-success alert-has-icon">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Success</div>
                          This is a success alert.
                        </div>
                      </div>
                      <div class="alert alert-danger alert-has-icon">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Danger</div>
                          This is a danger alert.
                        </div>
                      </div>
                      <div class="alert alert-warning alert-has-icon">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Warning</div>
                          This is a warning alert.
                        </div>
                      </div>
                      <div class="alert alert-info alert-has-icon">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Info</div>
                          This is a info alert.
                        </div>
                      </div>
                      <div class="alert alert-light alert-has-icon">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Light</div>
                          This is a light alert.
                        </div>
                      </div>
                      <div class="alert alert-dark alert-has-icon">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Dark</div>
                          This is a dark alert.
                        </div>
                      </div>
                    </div>
                    <div data-tab-group="alerts" id="dismissible">
                      <div class="alert alert-primary alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <div class="alert-title">Primary</div>
                          This is a primary alert.
                        </div>
                      </div>
                      <div class="alert alert-secondary alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <div class="alert-title">Secondary</div>
                          This is a secondary alert.
                        </div>
                      </div>
                      <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <div class="alert-title">Success</div>
                          This is a success alert.
                        </div>
                      </div>
                      <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <div class="alert-title">Danger</div>
                          This is a danger alert.
                        </div>
                      </div>
                      <div class="alert alert-warning alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <div class="alert-title">Warning</div>
                          This is a warning alert.
                        </div>
                      </div>
                      <div class="alert alert-info alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <div class="alert-title">Info</div>
                          This is a info alert.
                        </div>
                      </div>
                      <div class="alert alert-light alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <div class="alert-title">Light</div>
                          This is a light alert.
                        </div>
                      </div>
                      <div class="alert alert-dark alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <div class="alert-title">Dark</div>
                          This is a dark alert.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Badges</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="section-title mt-0">Heading</h2>
                    <h1>Example heading <span class="badge badge-secondary">New</span></h1>
                    <h2>Example heading <span class="badge badge-secondary">New</span></h2>
                    <h3>Example heading <span class="badge badge-secondary">New</span></h3>
                    <h4>Example heading <span class="badge badge-secondary">New</span></h4>
                    <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                    <h6>Example heading <span class="badge badge-secondary">New</span></h6>
                    <h2 class="section-title">Button</h2>
                    <button type="button" class="btn btn-primary">
                      Notifications <span class="badge badge-light">4</span>
                    </button>
                    <h2 class="section-title">Variations</h2>
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-secondary">Secondary</span>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-danger">Danger</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-info">Info</span>
                    <span class="badge badge-light">Light</span>
                    <span class="badge badge-dark">Dark</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Breadcrumb</h4>
                  </div>
                  <div class="card-body">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                      </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                      </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                      </ol>
                    </nav>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Accordion</h4>
                  </div>
                  <div class="card-body">
                    <div id="accordion">
                      <div class="accordion">
                        <div class="accordion-header" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                          <h4>Panel 1</h4>
                        </div>
                        <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                      </div>
                      <div class="accordion">
                        <div class="accordion-header" data-toggle="collapse" data-target="#panel-body-2">
                          <h4>Panel 2</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                      </div>
                      <div class="accordion">
                        <div class="accordion-header" data-toggle="collapse" data-target="#panel-body-3">
                          <h4>Panel 3</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <div class="btn-group">
                        <a href="#lg-simple" data-tab="list-group" class="btn active">Simple</a>
                        <a href="#lg-active" data-tab="list-group" class="btn">Active</a>
                        <div class="dropdown">
                          <a class="btn dropdown-toggle text-primary" data-toggle="dropdown">More</a>
                          <div class="dropdown-menu">
                            <a href="#lg-clickable" data-tab="list-group" class="dropdown-item">Clickable</a>
                            <a href="#lg-flush" data-tab="list-group" class="dropdown-item">Flush</a>
                            <a href="#lg-badges" data-tab="list-group" class="dropdown-item">Badges</a>
                            <a href="#lg-custom" data-tab="list-group" class="dropdown-item">Custom</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4>List Group</h4>
                  </div>
                  <div class="card-body">
                    <div class="active" id="lg-simple" data-tab-group="list-group">
                      <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                    </div>
                    <div id="lg-active" data-tab-group="list-group">
                      <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item active">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                    </div>
                    <div id="lg-clickable" data-tab-group="list-group">
                      <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                        Cras justo odio
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                      </div>
                    </div>
                    <div id="lg-flush" data-tab-group="list-group">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                    </div>
                    <div id="lg-badges" data-tab-group="list-group">
                      <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Cras justo odio
                          <span class="badge badge-primary badge-pill">14</span>
                          </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Dapibus ac facilisis in
                          <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Morbi leo risus
                          <span class="badge badge-primary badge-pill">1</span>
                        </li>
                      </ul>
                    </div>
                    <div id="lg-custom" data-tab-group="list-group">
                      <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small>Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Pagination</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="section-title mt-0">Quick Example</h2>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                    <h2 class="section-title">Working With Icons</h2>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <h2 class="section-title">Active State</h2>
                    <nav>
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                          <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                          </span>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                    <h2 class="section-title">Sizing</h2>
                    <nav>
                      <ul class="pagination pagination-lg">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Tooltips</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="section-title mt-0">Quick Example</h2>
                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                      Tooltip on top
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                      Tooltip on right
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                      Tooltip on bottom
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                      Tooltip on left
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <div class="btn-group">
                        <a href="#carousel-simple" data-tab="carousel" class="btn active">Simple</a>
                        <a href="#carousel-caption" data-tab="carousel" class="btn">With Caption</a>
                      </div>
                    </div>
                    <h4>Carousel</h4>
                  </div>
                  <div class="card-body">
                    <div class="active" data-tab-group="carousel" id="carousel-simple">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="../dist/img/news/img01.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../dist/img/news/img07.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../dist/img/news/img08.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>                              
                    </div>
                    <div data-tab-group="carousel" id="carousel-caption">
                      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="../dist/img/news/img01.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Heading</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../dist/img/news/img07.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Heading</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../dist/img/news/img08.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Heading</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Dropdown</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="section-title mt-0">Quick Example</h2>
                    <div class="dropdown d-inline">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Easy Dropdown
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger">Split Dropdown</button>
                      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="dropdown d-inline">
                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        With Icon
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="#"><i class="ion ion-heart"></i> Action</a>
                        <a class="dropdown-item has-icon" href="#"><i class="ion ion-document"></i> Another action</a>
                        <a class="dropdown-item has-icon" href="#"><i class="ion ion-clock"></i> Something else here</a>
                      </div>
                    </div>
                    <h2 class="section-title">Sizing</h2>
                    <div class="btn-group">
                      <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Large button
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-info btn-lg" type="button">
                      Large split button
                      </button>
                      <button type="button" class="btn btn-lg btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Small button
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-info btn-sm" type="button">
                      Small split button
                      </button>
                      <button type="button" class="btn btn-sm btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <h2 class="section-title">Variation</h2>
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropup
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group dropup">
                      <button type="button" class="btn btn-success">
                      Split dropup
                      </button>
                      <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="clearfix mt-2"></div>
                    <div class="btn-group dropright">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropright
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group dropright">
                      <button type="button" class="btn btn-secondary">
                      Split dropright
                      </button>
                      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropright</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="clearfix mt-2"></div>
                    <div class="btn-group dropleft">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      dropleft
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                    <div class="btn-group dropleft">
                      <button type="button" class="btn btn-secondary">
                      Split dropleft
                      </button>
                      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropright</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <div class="btn-group">
                        <a href="#navs-simple" data-tab="navs" class="btn active">Simple</a>
                        <a href="#navs-vertical" data-tab="navs" class="btn">Vertical</a>
                        <div class="dropleft">
                          <a class="btn dropdown-toggle text-primary" data-toggle="dropdown">More</a>
                          <div class="dropdown-menu">
                            <a href="#navs-pills" data-tab="navs" class="dropdown-item">Pills</a>
                            <a href="#navs-tabs" data-tab="navs" class="dropdown-item">Tabs</a>
                            <a href="#navs-pills-dropdown" data-tab="navs" class="dropdown-item">Pills Dropdown</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4>Navs</h4>
                  </div>
                  <div class="card-body">
                    <div id="navs-simple" data-tab-group="navs" class="active">
                      <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                      </ul>
                    </div>
                    <div id="navs-vertical" data-tab-group="navs">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                      </ul>
                    </div>
                    <div id="navs-pills" data-tab-group="navs">
                      <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                      </ul>
                    </div>
                    <div id="navs-tabs" data-tab-group="navs">
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                      </ul>
                    </div>
                    <div id="navs-pills-dropdown" data-tab-group="navs">
                      <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <div class="btn-group">
                        <a href="#progress-simple" data-tab="progress" class="btn active">Simple</a>
                        <a href="#progress-labels" data-tab="progress" class="btn">Labels</a>
                        <div class="dropleft">
                          <a class="btn dropdown-toggle text-primary" data-toggle="dropdown">More</a>
                          <div class="dropdown-menu">
                            <a href="#progress-background" data-tab="progress" class="dropdown-item">Background</a>
                            <a href="#progress-multiple" data-tab="progress" class="dropdown-item">Multiple</a>
                            <a href="#progress-striped" data-tab="progress" class="dropdown-item">Striped</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4>Progress</h4>
                  </div>
                  <div class="card-body">
                    <div id="progress-simple" data-tab-group="progress" class="active">
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div id="progress-labels" data-tab-group="progress">
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div>
                    </div>
                    <div id="progress-background" data-tab-group="progress">
                      <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div id="progress-multiple" data-tab-group="progress">
                      <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-light" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-light" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div id="progress-striped" data-tab-group="progress">
                      <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Popover</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="section-title mt-0">Quick Example</h2>
                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      Popover on top
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      Popover on right
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                    sagittis lacus vel augue laoreet rutrum faucibus.">
                      Popover on bottom
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      Popover on left
                    </button>
                    <h2 class="section-title">Dismissible</h2>
                    <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection