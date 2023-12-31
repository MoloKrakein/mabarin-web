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

  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- JS Dropzone -->

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
              <h1 class="m-0">Create Service Form</h1>
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
          <form action="service_create_process.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="inputVendorId" value="<?php echo $_SESSION['vendor_id']; ?>">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Service Name</label>
                <input type="text" id="inputName" name="inputName" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputServiceType">Service Type</label>
                <select id="inputServiceType" name="inputServiceType" class="form-control custom-select">
                  <option selected="" disabled="">Select one</option>
                  <option value="Duo">Duo</option>
                  <option value="Team">Team</option>
                  <option value="Full Coach">Full Coach</option>
                  <option value="Live Coach">Live Coach</option>
                  <option value="Online Coach">Online Coach</option>
                  <option value="Duo Casual">Duo Casual</option>
                  <option value="Team Casual">Team Casual</option>
                  <option value="Team vs Team Casual">Team vs Team Casual</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputDescription">Service Description</label>
                <textarea id="inputDescription" name="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputGame">Game Category</label>
                <select id="inputGame" name="inputGame" class="form-control custom-select">
                  <option selected="" disabled="">Select one</option>
                  <option>Mobile Legends</option>
                  <option>Free Fire</option>
                  <option>PUBG Mobile</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputPrice">Service Price</label>
                <input type="number" name="inputPrice" id="inputPrice" class="form-control">
              </div>
              <!-- upload image button -->
              <div class="form-group">
                <div style="display: flex; align-items: center;">
                  <div style="flex-grow: 1;">
                    <div class="form-group">
                      <label for="inputFile">Service Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="inputFile" id="inputFile" class="custom-file-input" accept="image/*">
                          <label class="custom-file-label" for="inputFile" id="fileNameDisplay">Choose Image or Drop Here</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <img id="imagePreview" style="max-width: 200px; max-height: 200px; margin-left: 10px;" />
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-2">
                    <!-- service time start in hour -->
                    <label for="inputHourStart">Service Start</label>
                    <input type="time" name="inputHourStart" id="inputHourStart" class="form-control" step="300">
                  </div>
                  <div class="form-group col-md-2">
                    <!-- service time start in hour -->
                    <label for="inputHourEnd">Service End</label>
                    <input type="time" name="inputHourEnd" id="inputHourEnd" class="form-control" step="300">
                  </div>
                </div>
                <!-- Button clear and submit  -->
                <div class="row">
                  <div class="col-12">
                    <a href="#" class="btn btn-danger">Cancel</a>
                    <input type="submit" value="Create new Service" class="btn btn-success float-right">
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
        fileNameDisplay.textContent = 'Choose file or Drop';
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
  </script>


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

    $(function() {
      Dropzone.autoDiscover = false

      // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
      var previewNode = document.querySelector("#template")
      previewNode.id = ""
      var previewTemplate = previewNode.parentNode.innerHTML
      previewNode.parentNode.removeChild(previewNode)

      var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "service_create_process.php", // Set the url to your PHP processing script
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
        acceptedFiles: "image/*" // Allow only image files
      });

      myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() {
          myDropzone.enqueueFile(file)
        }
      })

      // Update the total progress bar
      myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
      })

      myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")

      })

      // Hide the total progress bar when nothing's uploading anymore
      myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
      })


    });
    Dropzone.options.myDropzone = {
      paramName: "file", // Nama parameter yang akan dikirim ke server
      maxFilesize: 2, // Ukuran file maksimum (dalam MB)
      acceptedFiles: ".jpg, .png, .gif", // Jenis file yang diizinkan
      addRemoveLinks: true, // Menambahkan tautan hapus pada setiap file yang diunggah
      success: function(file, response) {
        // Dipanggil ketika unggahan berhasil
        console.log(response);
      },
    };
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
  <script src="plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>