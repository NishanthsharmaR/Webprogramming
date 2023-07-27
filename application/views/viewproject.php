<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!0000</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<script src="../../Jquery/prettify.js"></script>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="nav justify-content-center">
	
</div>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="data:image/jpeg;base64,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" alt="DBIT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Information Science</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://cdn-icons-png.flaticon.com/512/219/219983.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nishanth R</a>
          <a href="#" class="d-block">1DB19IS055</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="project" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="project" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>         
          </li>
          <li class="nav-item">
            <a href="tables" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('crud')?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                CRUD Operations
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>My Attendance</h3>

                <p>85%</p>
              </div>
              <div class="icon">
                <i class="ion-android-apps"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>My Internal Marks<sup style="font-size: 20px"></sup></h3>

                <p>Average</p>
              </div>
              <div class="icon">
                <i class="ion-university"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>My Time Table</h3>

                <p>Weekly</p>
              </div>
              <div class="icon">
                <i class="ion-ios-calendar-outline"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Backlogs</h3>

                <p>5</p>
              </div>
              <div class="icon">
                <i class="ion-arrow-down-b"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Complete Assignmnts</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 subjects</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2">
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Prepare for Internals</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> Next Week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Learn New Technologies</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> New Courses</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Prepare for Exams</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 2 Months</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="ion-ios-plus-empty"></i> Add item</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="ion-ios-people mr-1"></i>
                  Latest News
                </h3>
              </div>
              <div class="card-body">
                <div class="small-box bg-dark" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-12 text-center">
                    <div id="ion-ios-eye"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                 
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>     
              </div>
              <!-- /.card-footer -->
            </div>
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Input Addon</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <h4>With icons</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                  </div>
                </div>

                <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="radio"></span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

                <h5 class="mt-4 mb-2">With buttons</h5>

                <p>Large: <code>.input-group.input-group-lg</code></p>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="#">Action</a></li>
                      <li class="dropdown-item"><a href="#">Another action</a></li>
                      <li class="dropdown-item"><a href="#">Something else here</a></li>
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item"><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Normal</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Action</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Small <code>.input-group.input-group-sm</code></p>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>			  
            </div>
            <!-- /.card -->
			<div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Drowpdowns Forms</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
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
                  <label>Disabled</label>
                  <select class="form-control select2" disabled="disabled" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            
            <div class="row">
              <div class="col-12 col-sm-6">
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          
        </div>
		



          </div>

          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Different Width</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder=".col-5">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Textarea Disabled</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                      </div>
                    </div>
                  </div>

                  <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                      success</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                      warning</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                      error</label>
                    <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Checkbox checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <label class="form-check-label">Checkbox disabled</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Radio</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" checked>
                          <label class="form-check-label">Radio checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" disabled>
                          <label class="form-check-label">Radio disabled</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Disabled</label>
                        <select class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    
                    
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
              <!-- /.card-header -->
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://dbit.co.in/">DBIT</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>



