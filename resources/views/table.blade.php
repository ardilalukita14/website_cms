@extends('layoutsadmin.app')
    <!-- Preloader Start-->
@include('layoutsadmin.header')
@extends('layoutsadmin.contents')
@section('content')
@include('layoutsadmin.sidebar')
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Tables</div>
          </h1>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Simple Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Created At</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-success">Active</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Hasan Basri</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-success">Active</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Kusnadi</td>
                          <td>2017-01-11</td>
                          <td><div class="badge badge-danger">Not Active</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Rizal Fakhri</td>
                          <td>2017-01-11</td>
                          <td><div class="badge badge-success">Active</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="ion ion-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="ion ion-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Full Width</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Created At</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-success">Active</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Hasan Basri</td>
                          <td>2017-01-09</td>
                          <td><div class="badge badge-success">Active</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Kusnadi</td>
                          <td>2017-01-11</td>
                          <td><div class="badge badge-danger">Not Active</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Rizal Fakhri</td>
                          <td>2017-01-11</td>
                          <td><div class="badge badge-success">Active</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="ion ion-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="ion ion-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-secondary"><i class="ion ion-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <h4>Advanced Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th class="text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                              <label for="checkbox-all" class="custom-control-label"></label>
                            </div>
                          </th>
                          <th>Task Name</th>
                          <th>Progress</th>
                          <th>Members</th>
                          <th>Due Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td width="40">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                              <label for="checkbox-1" class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>Create a mobile app</td>
                          <td class="align-middle">
                            <div class="progress" style="height: 4px;" data-toggle="tooltip" title="100%">
                              <div class="progress-bar bg-success" style="width: 100%;"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian">
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-success">Completed</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                              <label for="checkbox-2" class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>Redesign homepage</td>
                          <td class="align-middle">
                            <div class="progress" style="height: 4px;" data-toggle="tooltip" title="0%">
                              <div class="progress-bar" style="width: 0;"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Nur Alpiana">
                            <img alt="image" src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Hariono Yusup">
                            <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Bagus Dwi Cahya">
                          </td>
                          <td>2018-04-10</td>
                          <td><div class="badge badge-info">Todo</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                              <label for="checkbox-3" class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>Backup database</td>
                          <td class="align-middle">
                            <div class="progress" style="height: 4px;" data-toggle="tooltip" title="70%">
                              <div class="progress-bar bg-warning" style="width: 70%;"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Rizal Fakhri">
                            <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Hasan Basri">
                          </td>
                          <td>2018-01-29</td>
                          <td><div class="badge badge-warning">In Progress</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                              <label for="checkbox-4" class="custom-control-label"></label>
                            </div>
                          </td>
                          <td>Input data</td>
                          <td class="align-middle">
                            <div class="progress" style="height: 4px;" data-toggle="tooltip" title="100%">
                              <div class="progress-bar bg-success" style="width: 100%;"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Rizal Fakhri">
                            <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Isnap Kiswandi">
                            <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Yudi Nawawi">
                            <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Khaerul Anwar">
                          </td>
                          <td>2018-01-16</td>
                          <td><div class="badge badge-success">Completed</div></td>
                          <td><a href="#" class="btn btn-action btn-secondary">Detail</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection