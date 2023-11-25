<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mabarin | Order</title>

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
    <div id="topbar"></div>
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
              <h1 class="m-0">Order Detail</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to delete this service?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="#" id="deleteServiceBtn" class="btn btn-danger">Delete Service</a>
              </div>
            </div>
          </div>
        </div>
        <!-- form -->
        <?php
        // Include file konfigurasi koneksi ke database
        include "config.php";

        // Ambil order_id dari query string
        $order_id = $_GET['order_id'];

        // Query SQL untuk mendapatkan data layanan dari database
        $sql = "SELECT * FROM order_view WHERE order_id = $order_id";
        $result = $conn->query($sql);
        $order = $result->fetch_assoc();
        ?>
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"><?php echo $order['customer_email'] ?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <form action="order_process.php" method="post">
            <input type="hidden" name="inputOrderId" value="<?php echo $order['order_id']; ?>">
            <!-- <input type="hidden" name="inputVendorId" value="<?php echo $_SESSION['vendor_id']; ?>"> -->

            <div class="card-body">
              <!-- Menampilkan data order dari order_view -->
              <div class="form-group">
                <label for="inputServiceName">Service Name</label>
                <input type="text" id="inputServiceName" name="inputServiceName" class="form-control" value="<?php echo $order['service_name']; ?>" readonly>
              </div>

              <div class="form-group">
                <label for="inputDescription">Service Description</label>
                <textarea id="inputDescription" name="inputDescription" class="form-control" rows="4" readonly><?php echo $order['service_description']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputGame">Service Type</label>
                <input type="text" id="inputGame" name="inputGame" class="form-control" value="<?php echo $order['service_type']; ?>" readonly>
              </div>
              <div class="form-group">
                <label for="inputGame">Game Category</label>
                <input type="text" id="inputGame" name="inputGame" class="form-control" value="<?php echo $order['service_game']; ?>" readonly>
              </div>
              <div class="form-group">
                <label for="inputGame">Price</label>
                <input type="text" id="inputGame" name="inputGame" class="form-control" value="<?php echo 'Rp ' . number_format($order['service_price'], 0, ',', '.') ?>" readonly>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" name="inputStatus" class="form-control">
                  <option value="Pending" <?php if ($order['status'] == 'pending') echo 'selected'; ?>>Pending</option>
                  <option value="In Progress" <?php if ($order['status'] == 'in_progress') echo 'selected'; ?>>In Progress</option>
                  <option value="Completed" <?php if ($order['status'] == 'completed') echo 'selected'; ?>>Completed</option>
                  <option value="Cancelled" <?php if ($order['status'] == 'cancelled') echo 'selected'; ?>>Cancelled</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputDescriptionOrder">Order Description</label>
                <textarea id="inputDescriptionOrder" name="inputDescriptionOrder" class="form-control" rows="4" placeholder="<?php echo $order['order_description']; ?>"></textarea>
              </div>
              <!-- Button clear and submit -->
              <div class="row">
                <div class="col-12">
                  <a href="index.php" class="btn btn-warning">Cancel</a>
                  <!-- <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirmationModal" id="deleteBtn">Delete Order</a> -->
                  <input type="submit" value="Update Order" class="btn btn-success float-right">
                </div>
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
    $(function() {
      $("#topbar").load("topbar.php");
    })
  </script>
  <script>
    $(document).ready(function() {
      $('#deleteBtn').click(function() {
        var serviceId = <?php echo $service['order_id']; ?>;
        var deleteUrl = 'delete_service.php?order_id=' + serviceId;
        $('#deleteServiceBtn').attr('href', deleteUrl);
      });
    });
  </script>

  <script>
    // Fungsi untuk menampilkan nama file yang dipilih dan preview gambar
    function handleFileSelect(files) {
      var fileInput = document.getElementById('inputFile');
      var fileNameDisplay = document.getElementById('fileNameDisplay');
      var imagePreview = document.getElementById('imagePreview');

      // Pastikan file yang dipilih adalah gambar
      if (files[0] && files[0].type.startsWith('image/')) {
        // Menampilkan nama file yang dipilih
        fileNameDisplay.textContent = files[0].name;

        // Menampilkan preview gambar
        var reader = new FileReader();
        reader.onload = function(e) {
          imagePreview.src = e.target.result;
        };
        reader.readAsDataURL(files[0]);
      } else {
        // Jika bukan gambar, atur nama file dan preview menjadi kosong
        fileNameDisplay.textContent = 'Choose file';
        imagePreview.src = '';
      }
    }

    // Menambahkan event listener untuk mengaktifkan fungsi di atas saat ada perubahan pada input file
    document.getElementById('inputFile').addEventListener('change', function(e) {
      handleFileSelect(e.target.files);
    });

    // Menambahkan event listener untuk menangani drop file
    document.body.addEventListener('dragover', function(e) {
      e.preventDefault();
      e.stopPropagation();
    });

    document.body.addEventListener('drop', function(e) {
      e.preventDefault();
      e.stopPropagation();

      // Menangani file yang di-drop
      handleFileSelect(e.dataTransfer.files);
    });

    // Menambahkan event listener untuk mengaktifkan input file saat label diklik
    document.getElementById('fileNameDisplay').addEventListener('click', function() {
      document.getElementById('inputFile').click();
    });
    <?php
    // Mendapatkan nama file gambar default
    $yourDefaultImageFileName = "";
    if (!empty($service['detail_image'])) {
      $yourDefaultImageFileName = $service['detail_image'];
    }

    ?>
    // Menampilkan data gambar default
    var defaultImageFileName = "<?php echo $yourDefaultImageFileName; ?>";
    if (defaultImageFileName) {
      fileNameDisplay.textContent = defaultImageFileName;
      imagePreview.src = "uploads/" + defaultImageFileName;
    }
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