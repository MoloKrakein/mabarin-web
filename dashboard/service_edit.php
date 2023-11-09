<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mabarin | Create Services</title>

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
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/Logo.svg" alt="AdminLTELogo" height="60" width="60">
  </div>

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
        <a href="#" class="nav-link">Create Service</a>
      </li>
    </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <div id="sidebar"></div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Service Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <!-- form -->
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Service Info</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <?php
              // Include file konfigurasi koneksi ke database
              include "config.php";

              // Ambil service_id dari query string
              $service_id = $_GET['service_id'];

              // Query SQL untuk mendapatkan data layanan dari database
              $sql = "SELECT * FROM service WHERE service_id = $service_id";
              $result = $conn->query($sql);
              $service = $result->fetch_assoc();
            ?>
            <form action="service_edit_process.php" method="post">
              <input type="hidden" name="inputServiceId" value="<?php echo $service['service_id']; ?>">
              <input type="hidden" name="inputVendorId" value="<?php echo $_SESSION['vendor_id']; ?>">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Service Name</label>
                <input type="text" id="inputName" name="inputName" class="form-control" value="<?php echo $service['service_name']; ?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Service Description</label>
                <textarea id="inputDescription" name="inputDescription" class="form-control" rows="4"><?php echo $service['service_description']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputGame">Game Category</label>
                <select id="inputGame" name="inputGame" class="form-control custom-select">
                  <option selected="" disabled="">Select one</option>
                  <option <?php if($service['service_game'] == "Mobile Legends") echo "selected"; ?>>Mobile Legends</option>
                  <option <?php if($service['service_game'] == "Free Fire") echo "selected"; ?>>Free Fire</option>
                  <option <?php if($service['service_game'] == "PUBG Mobile") echo "selected"; ?>>PUBG Mobile</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputPrice">Service Price</label>
                <input type="number" name="inputPrice" id="inputPrice" class="form-control" value="<?php echo $service['service_price']; ?>">
              </div>
              <div class="row">
              <div class="form-group col-md-2">
                <!-- service time start in hour -->
                <label for="inputHourStart">Service Start</label>
                <input type="time" name="inputHourStart" id="inputHourStart" class="form-control" step="300" value="<?php echo $service['service_start_hour']; ?>">
              </div>
              <div class="form-group col-md-2">
                <!-- service time start in hour -->
                <label for="inputHourEnd">Service End</label>
                <input type="time" name="inputHourEnd" id="inputHourEnd" class="form-control" step="300" value="<?php echo $service['service_end_hour']; ?>">
              </div>
            </div>
            <!-- Button clear and submit  -->
            <div class="row">
              <div class="col-12">
                <a href="#" class="btn btn-warning">Cancel</a>
                <a href="service_delete_process.php?service_id=<?php echo $service['service_id']; ?>" class="btn btn-danger">Delete Service</a>
                <input type="submit" value="Update Service" class="btn btn-success float-right">
              </div>
            </div>
          </form>

            <!-- /.card-body -->
          </div>
    </section>
  </div>

  <!-- /.content-wrapper -->
  <div id="footer"></div>

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
<script>
    $(function() {
        $("#sidebar").load("navbar.php");
    })

    $(function() {
        $("#footer").load("footer.php");
    })

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

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
