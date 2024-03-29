<?php
session_start();
include '../dbconn.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sawari | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />

  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css" />
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" />
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css" />
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css" />
  <!-- <link rel="icon" type="image/x-icon" href="../image/kisanarea.png" /> -->

</head>

<body class="hold-transition sidebar-mini font">
  <?php
  include '../includes/aside.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid d-flex justify-content-center">
        <h1 class="mt-3 mb-5">Dashboard</h1>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row font">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner font">
                  <h4 class="mb-2">Total Cars</h4>
                  <?php
                  $dashTotProd = "SELECT * from cars";
                  $dashTotProdQuery = mysqli_query($conn, $dashTotProd);

                  if ($totalProd = mysqli_num_rows($dashTotProdQuery)) {
                    echo '<h4 class="mb-0">' . $totalProd . '</h4>';
                  } else {
                    echo '<h4 class="mb-0">No Data Found</h4>';
                  }
                  ?>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="./manageprod.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h4 class="mb-2">Total Users</h4>
                  <?php
                  $dashTotUsr = "SELECT * from users";
                  $dashTotUsrQuery = mysqli_query($conn, $dashTotUsr);

                  if ($totalUsr = mysqli_num_rows($dashTotUsrQuery)) {
                    echo '<h4 class="mb-0">' . $totalUsr . '</h4>';
                  } else {
                    echo '<h4 class="mb-0">No Data Found</h4>';
                  }
                  ?>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="./manageusr.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h4 class="mb-2">Total Bookings</h4>
                  <?php
                  $dashTotOrd = "SELECT * from bookings";
                  $dashTotOrdQuery = mysqli_query($conn, $dashTotOrd);

                  if ($totalProd = mysqli_num_rows($dashTotOrdQuery)) {
                    echo '<h4 class="mb-0">' . $totalProd . '</h4>';
                  } else {
                    echo '<h4 class="mb-0">No Data Found</h4>';
                  }
                  ?>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="./manageorder.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h4 class="mb-2">Total Categories</h4>
                  <h4 class="mb-0">3</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
    <!-- /.control-sidebar -->
    <footer class="d-flex justify-content-center mt-5">
      <strong>Copyright &copy; 2023
        <a href="#">Sawari</a>.</strong>
    </footer>

  </div>
</body>


</html>