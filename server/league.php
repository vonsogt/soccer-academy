<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <?php include '../connection.php' ?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'views/sidebar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Liga</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Liga</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <?php

            // Ambil parameter page
            $page = $_GET['page'] ?? '';

            // Jika parameter `page` sama dengan `create` atau `edit`
            if ($page == 'create' || $page == 'edit') {

              // Jika page sama dengan `edit` dan memiliki `id`
              if ($page == 'edit' && isset($_GET['id'])) {
                // Check apakah `id` ada didatabase
                $id = $_GET['id'];
                $sql = 'SELECT * FROM `leagues` WHERE id = ' . $id;
                $result = $conn->query($sql);

                $num_rows = $result ? $result->num_rows : 0;

                // jika result ada maka tampilkan form dengan value yang ada didatabase
                if ($num_rows > 0 && $id != "") { ?>
                  <div class="col-8">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Ubah Liga</h3>
                      </div>
                      <!-- /.card-header -->
                      <form name="form1" method="post" action="/api/league.php">
                        <input type="hidden" name="tipe" value="update">
                        <input type="hidden" name="id" value="">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Nama</label>
                                <input name="name" type="text" class="form-control" placeholder="Enter ...">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Tanggal</label>
                                <input name="date" type="date" class="form-control" placeholder="Enter ...">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Lokasi</label>
                                <input name="location" type="text" class="form-control" placeholder="Enter ...">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="custom-select">
                                  <option selected disabled value="">Choose...</option>
                                  <option value="Buka">Buka</option>
                                  <option value="Tutup">Tutup</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="customFile">Upload Logo</label>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="customFile">
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                                  <small>Max. file size: 1 MB. Allowed: jpg, jpeg, png.</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!-- /.card-body -->
                      </form>
                    </div>
                  </div>
                <?php
                  // get data from ajax request
                  echo '<script>document.addEventListener("DOMContentLoaded", function() {editLeague(' . $id . ')})</script>';
                }
              } else if ($page == 'edit' && !isset($_GET['id'])) { // Jika page sama dengan `edit` dan tidak memiliki `id`
                echo '<div class="error-page">
                  <h2 class="headline text-warning"> 404</h2>
          
                  <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
          
                    <p>
                      We could not find the page you were looking for.
                      Meanwhile, you may <a href="/server/index.php">return to dashboard</a> or try using the search form.
                    </p>
                  </div>
                  <!-- /.error-content -->
                </div>';
              } else {
                ?>
                <div class="col-8">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tambah Liga</h3>
                    </div>
                    <!-- /.card-header -->
                    <form name="form1" method="post" action="/api/league.php">
                      <input type="hidden" name="tipe" value="store">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Nama</label>
                              <input name="name" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Tanggal</label>
                              <input name="date" type="date" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Lokasi</label>
                              <input name="location" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Status</label>
                              <select name="status" class="custom-select">
                                <option selected disabled value="">Choose...</option>
                                <option value="Buka">Buka</option>
                                <option value="Tutup">Tutup</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="customFile">Upload Logo</label>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <small>Max. file size: 1 MB. Allowed: jpg, jpeg, png.</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      <!-- /.card-body -->
                    </form>
                  </div>
                </div>
                <?php }
            } else if (!empty($_GET['page']) == 'manage') {
              $id = $_GET['id'] ?? '';

              // Jika id tidak di isi 
              if ($id == '') {
                echo '<div class="error-page">
                <h2 class="headline text-warning"> 404</h2>
        
                <div class="error-content">
                  <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
        
                  <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="/server/index.php">return to dashboard</a> or try using the search form.
                  </p>
                </div>
                <!-- /.error-content -->
              </div>';
              } else {
                //  Checking id in database
                $sql = 'SELECT * FROM `leagues` WHERE id=' . $id . ' AND `status`="Buka"';
                $result = $conn->query($sql);

                // Jika ada 
                if ($row = $result->fetch_assoc()) {
                ?>
                  <div class="col-8">

                    <div class="card card-default">
                      <div class="card-header">
                        <h3 class="card-title">Kelola Liga</h3>
                      </div>
                      <!-- /.card-header -->
                      <form name="form1" method="post" action="/api/league.php">
                        <input type="hidden" name="tipe" value="manage">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                              <div class="row">
                                <div class="col-12 col-sm-4">
                                  <div class="info-box bg-light">
                                    <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Nama Liga</span>
                                      <span class="info-box-number text-center text-muted mb-0"><?php echo $row['name'] ?></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                  <div class="info-box bg-light">
                                    <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Tanggal</span>
                                      <span class="info-box-number text-center text-muted mb-0"><?php echo $row['date'] ?></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                  <div class="info-box bg-light">
                                    <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Lokasi</span>
                                      <span class="info-box-number text-center text-muted mb-0"><?php echo $row['location'] ?></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Pilih Tim</label>
                                <select class="duallistbox" multiple="multiple" style="display: none;">
                                  <?php
                                  // Select hasMany using from this link https://stackoverflow.com/a/7774879 (13)
                                  // $sql = 'SELECT `t.*` FROM `teams` AS `t` WHERE EXIST (' .
                                  //   'SELECT `*` FROM `team_has_leagues` AS `x` JOIN `team_has_leagues` AS `y` USING (`team_id`) WHERE `x.team_id` = ';
                                  ?>
                                  <option>Alabama</option>
                                  <option>Alaska</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                              </div>
                              <!-- /.form-group -->
                              <div class="form-group">
                                <label>Ronde Pertama <i class="fa fa-info-circle" data-toggle="tooltip" title="Info apa itu ronde pertama"></i></label>
                                <select name="status" class="custom-select">
                                  <option selected disabled value="">Choose...</option>
                                  <option value="Acak">Acak</option>
                                  <option value="Unggulan">Unggulan</option>
                                  <option value="Manual">Manual</option>
                                </select>
                              </div>
                              <!-- /.form-group -->
                              <div class="form-group">
                                <label>Juara 3 <i class="fa fa-info-circle" data-toggle="tooltip" title="Info apa itu juara 3"></i></label>
                                <select name="status" class="custom-select">
                                  <option selected disabled value="">Choose...</option>
                                  <option value="Ya">Ya</option>
                                  <option value="Tidak">Tidak</option>
                                </select>

                              </div>
                              <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Generate</button>
                        </div>
                      </form>
                    </div>
                  </div>
                <?php
                } else { // Jika tidak ada didatabase
                  echo '<div class="error-page">
                  <h2 class="headline text-warning"> 404</h2>
          
                  <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
          
                    <p>
                      We could not find the page you were looking for.
                      Meanwhile, you may <a href="/server/index.php">return to dashboard</a> or try using the search form.
                    </p>
                  </div>
                  <!-- /.error-content -->
                </div>';
                }
              }
            } else if (!empty($_GET['page']) == 'view' && isset($_GET['id'])) {
              if (!empty($id = $_GET['id'])) {
                $sql = 'SELECT * FROM `leagues` WHERE `id` = ' . $id;
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();

                $num_rows = $result ? $result->num_rows : 0;

                // jika result ada maka tampilkan form dengan value yang ada didatabase
                if ($num_rows > 0 && $id != "") {

                ?>
                  <!-- Lihat Liga -->
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-eye"></i>
                          Lihat Liga
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <dl class="row">
                          <dt class="col-sm-4">Nama</dt>
                          <dd class="col-sm-8"><?php echo $row['name'] ?? '-' ?></dd>
                          <dt class="col-sm-4">Tanggal</dt>
                          <dd class="col-sm-8"><?php echo $row['date'] ?? '-' ?></dd>
                          <dt class="col-sm-4">Lokasi</dt>
                          <dd class="col-sm-8"><?php echo $row['location'] ?? '-' ?></dd>
                          <dt class="col-sm-4">Status</dt>
                          <dd class="col-sm-8"><?php echo $row['status'] ?? '-' ?></dd>
                        </dl>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
              <?php } else {
                  echo '<div class="error-page">
                <h2 class="headline text-warning"> 404</h2>
        
                <div class="error-content">
                  <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
        
                  <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="/server/index.php">return to dashboard</a> or try using the search form.
                  </p>
                </div>
                <!-- /.error-content -->
              </div>';
                }
              } else {
                echo '<div class="error-page">
                <h2 class="headline text-warning"> 404</h2>
        
                <div class="error-content">
                  <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
        
                  <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="/server/index.php">return to dashboard</a> or try using the search form.
                  </p>
                </div>
                <!-- /.error-content -->
              </div>';
              }
            } else { ?>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">List Liga</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div style="margin-bottom: 10px;" class="row">
                      <div class="col-lg-12">
                        <a class="btn btn-success" href="league.php?page=create">
                          <i class="fa fa-plus"></i>&nbsp; Tambah Liga
                        </a>
                      </div>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Lokasi</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Lokasi</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            <?php } ?>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Erlinda Ainun
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/server/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/server/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="/server/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/server/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/server/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/server/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/server/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/server/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/server/plugins/jszip/jszip.min.js"></script>
  <script src="/server/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/server/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/server/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/server/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/server/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/server/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/server/dist/js/demo.js"></script>
  <!-- Swal2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Bootstrap4 Duallistbox -->
  <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "ajax": '/api/league.php',
        "columnDefs": [{
          "targets": 4,
          "data": 4,
          "render": function(data, type, full, meta) {
            console.log(full['3']);

            var manage_button = full['3'] == "Buka" ? '<a class="btn btn-primary btn-sm" href="/server/league.php?page=manage&id=' + data + '"><i class="far fa-edit"></i> Kelola</a> ' : '';
            return '' +
              manage_button +
              '<a class="btn btn-primary btn-sm" href="/server/league.php?page=view&id=' + data + '"><i class="fas fa-eye"></i> Lihat</a> ' +
              '<a class="btn btn-info btn-sm" href="/server/league.php?page=edit&id=' + data + '"><i class="fas fa-pencil-alt"></i> Ubah</a> ' +
              '<a class="btn btn-danger btn-sm" onclick="deleteLeague(' + data + ')" href="javascript:void(0)"><i class="fas fa-trash"></i> Hapus</a>';

          }
        }]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      $('[data-toggle="tooltip"]').tooltip()
    });

    function findGetParameter(parameterName) {
      var result = null,
        tmp = [];
      var items = location.search.substr(1).split("&");
      for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
      }
      return result;
    }

    if (status = findGetParameter('status')) {
      if (status == 'stored')
        Swal.fire(
          'Berhasil!',
          'Berhasil menambahkan liga!',
          'success'
        )
      else if (status == 'updated')
        Swal.fire(
          'Berhasil!',
          'Berhasil mengubah liga!',
          'success'
        )
    }

    function editLeague(id) {
      $.ajax({
        type: "POST",
        url: "/api/league.php",
        data: {
          'tipe': 'edit',
          'id': id
        },
        success: function(response) {
          var res = JSON.parse(response)
          var data = res.data

          // for (let key in data) {
          //   if (data.hasOwnProperty(key)) {
          //     $("input")
          //     console.log(`${key} : ${data[key]}`)
          //   }
          // }

          $("input[name=id]").val(data.id);
          $("input[name=name]").val(data.name);
          $("input[name=date]").val(data.date);
          $("input[name=location]").val(data.location);
          $("select[name=status ] option[value='" + data.status + "']").attr("selected", "selected");

        }
      });
    }

    function deleteLeague(id) {
      Swal.fire({
        title: 'Apakah anda yakin hapus liga ini?',
        text: "Anda tidak akan dapat mengembalikan ini!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Batal',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: "POST",
            url: "/api/league.php",
            data: {
              'tipe': 'delete',
              'id': id
            },
            success: function(response) {
              $('#example1').DataTable().ajax.reload();
              var res = JSON.parse(response);
              if (res.status)
                Swal.fire(
                  'Dihapus!',
                  'Liga berhasil dihapus.',
                  'success'
                )
              else
                Swal.fire(
                  'Gagal!',
                  'Gagal menghapus liga.',
                  'error'
                )
            },
            fail: function(response) {
              Swal.fire(
                'Error!',
                'Terjadi kesalahan, silahkan coba kembali.',
                'fail'
              )
            }
          });
        }
      })
    }
  </script>
</body>

</html>