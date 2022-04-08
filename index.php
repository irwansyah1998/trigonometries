
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculate | Area of Square</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="template/AdminLTE310/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="template/AdminLTE310/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template/AdminLTE310/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="template/AdminLTE310/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="template/AdminLTE310/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Area Calculator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="template/AdminLTE310/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ivan David Arnanda</a>
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Calculate Area
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Square</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Triangle</p>
                </a>
              </li>
            </ul>
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
            <h1 class="m-0">Area of Square</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Area of Square</li>
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
          <div class="col-md-5">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class=" img-fluid"
                       src="template/shape/square/Square.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Square</h3>

                <p class="text-muted text-center">Detail</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                	<b>Parameter</b> <a class="float-right">AB, BC, CD, DA</a>
                </li>
                  <li class="list-group-item">
                    <b>Total of Side</b> <a class="float-right">4</a>
                  </li>
                <li class="list-group-item">
                	<b>Slicer</b> <a class="float-right">t</a>
                </li>
                <li class="list-group-item">
                	<b>Edge of Square</b> <a class="float-right">A, B, C, D</a>
                </li>
                  <li class="list-group-item">
                    <b>Total of Degree</b> <a class="float-right">360</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>More Information</b></a>
              </div>
              <!-- /.card-body -->
              <!-- About Me Box -->
            
            </div>
            <!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulas (ƒ)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Standard of Square</strong>
                <p class="text-muted">
                <img class=" img-fluid" src="template/shape/square/areasquare1.png" alt="User profile picture"><br>This formula is the standard of use for calculate area of square.<br>This function is used if :<br>1. All Side is Same<br>2. Total degree is 360 and (setiap sudut) have 90 degree.
            	</p>
                <strong><i class="fas fa-book mr-1"></i> Iregullar Square</strong>
                <p class="text-muted">
                <img class=" img-fluid" src="template/shape/square/areasquare.png" alt="User profile picture"><br>This formula use for calculate area of iregullar square.<br>This function is used if :<br>1. All Side is not Same<br>2. Total degree is 360 and (setiap sudut) have diferent i at each other.
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-7">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Calculate</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="index.php">
                <div class="card-body">
                <div class="row">
                	<div class="col-12">
                		<label>Side :</label>
                	</div>
                	<div class="col-6">
                		<div class="form-group">
                  		<label>Side AB</label>
                  			<input type="hidden" name="send" value="sended">
                    		<input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="AB" class="form-control" required="" placeholder="(metre)">
                  		</div>
                	</div>
                  	<div class="col-6">
                  		<div class="form-group">
                  		<label>Side BC</label>
                    		<input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="BC" class="form-control" required="" placeholder="(metre)">
                  		</div>
                  	</div>
                  	<div class="col-6">
                  		<div class="form-group">
                  		<label>Side DA</label>
                    		<input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="DA" class="form-control" required="" placeholder="(metre)">
                  		</div>
                	</div>
                  	<div class="col-6">
                  		<div class="form-group">
                  		<label>Side CD</label>
                    		<input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="CD" class="form-control" required="" placeholder="(metre)">
                  		</div>
                  	</div>
                  	<div class="col-12">
                		<label>Degree :</label>
                	</div>
                	<div class="col-6">
                		<div class="form-group">
                  		<label>A</label>
                    		<input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="A" class="form-control" required="" placeholder="(degree)">
                  		</div>
                	</div>
                  	<div class="col-6">
                  		<div class="form-group">
                  		<label>B</label>
                    		<input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="B" class="form-control" required="" placeholder="(degree)">
                  		</div>
                  	</div>
                  	<div class="col-6">
                  		<div class="form-group">
                  		<label>D</label>
                    		<input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="D" class="form-control" required="" placeholder="(degree)">
                  		</div>
                	</div>
                  	<div class="col-6">
                  		<div class="form-group">
                  		<label>C</label>
                    		<input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="C" class="form-control" required="" placeholder="(degree)">
                  		</div>
                  	</div>
                </div>
              </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


            <!-- Hasil form elements -->
            <?php if (isset($_POST['send'])) {
            	include 'formulas.php';
            	$data1 = array(	'AB' => $_POST['AB'],
            					'BC' => $_POST['BC'],
            					'A' => $_POST['A'],
            					'B' => $_POST['B'],
            					'C' => $_POST['C']
            					);
            	$data2 = array(	'DA' => $_POST['DA'],
            					'CD' => $_POST['CD'],
            					'A' => $_POST['A'],
            					'C' => $_POST['C'],
            					'D' => $_POST['D']
            					);
            	$arrData1=squarearea1($data1);
            	$arrData2=squarearea2($data2);
            	?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Explaination</h3>
              </div>
              <!-- /.card-header -->
             
              
              	<div class="card-body">
                	<div class="row">
                		<strong><i class="fas fa-book mr-1"></i> This is a explanation from the formulas (ƒ)</strong>
                		<p class="text-muted">

                			First, we will search t (slicer length)<br><br>
                			Here the formulas (ƒ) :<br>
                			<img class=" img-fluid" src="template/shape/square/formulat1.png" alt="User profile picture"><br>
                			with,<br>
                			AB = <?php echo $data1['AB']." metre"; ?>,<br>
                			BC = <?php echo $data1['BC']." metre"; ?>,<br>
                			b = B = <?php echo $data1['B']." degree = ".deg2rad($data1['B'])." rad"; ?>,<br>
                			then,<br>
                			t = <?php echo $arrData1['t']." metre"; ?><br>

                			<br>or,<br><br>
                			<img class=" img-fluid" src="template/shape/square/formulat2.png" alt="User profile picture"><br>
                			with,<br>
                			DA = <?php echo $data2['DA']." metre"; ?>,<br>
                			CD = <?php echo $data2['CD']." metre"; ?>,<br>
                			d = D = <?php echo $data2['D']." degree = ".deg2rad($data2['D'])." rad"; ?>,<br>
                			then,<br>
                			t = <?php echo $arrData2['t']." metre"; ?><br>
                			<br>
                			We have value of t (slicer) that from point A to C,<br>
                			AC = <?php echo $arrData2['t']." metre."; ?><br>
                      the thow of triangle have same lenght, and that we can calculate it.
                			<br>
                			Next,<br>
                      we have a same slicer lenght, and now we can calculate the area with formula (ƒ):<br>
                			<img class=" img-fluid" src="template/shape/square/areasquare.png" alt="User profile picture"><br>
                			with,<br>
                			t = <?php echo $arrData1['t']." metre,"; ?><br>
                			AD = DA = <?php echo $data2['DA']." metre,"; ?><br>
                			BC = <?php echo $data1['BC']." metre,"; ?><br>
                      BC = <?php echo $data2['CD']." metre,"; ?><br>
                			b = B = <?php echo $data1['B']." degree = ".deg2rad($data1['B']).' rad,'; ?><br>
                      D = D = <?php echo $data2['D']." degree = ".deg2rad($data2['D']).' rad.'; ?><br>
                			<br>
                			And the final is we can find a area of the square,<br>
                			<strong>The area is <u><b><?php echo round($arrData1['area']+$arrData2['area'],4); ?></b></u></strong>

            			</p>
                	</div>
              	</div>
                
              
            </div>
            <?php } ?>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <div>
        	
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Helper by <a href="https://www.github.com/irwansyah1998">Irwansyah</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Created by </b> <a href="https://www.instagram.com/ivan.david.arnanda">Ivan David Arnanda</a>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="template/AdminLTE310/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="template/AdminLTE310/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="template/AdminLTE310/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="template/AdminLTE310/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="template/AdminLTE310/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="template/AdminLTE310/plugins/raphael/raphael.min.js"></script>
<script src="template/AdminLTE310/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="template/AdminLTE310/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="template/AdminLTE310/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="template/AdminLTE310/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="template/AdminLTE310/dist/js/pages/dashboard2.js"></script>
</body>
</html>
