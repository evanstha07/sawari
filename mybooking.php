
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sawari | Manage Product</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- daterange picker -->
    <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- Select2 -->
    <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css" />
    <link rel="stylesheet" href="admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" />
    <!-- BS Stepper -->
    <link rel="stylesheet" href="admin/plugins/bs-stepper/css/bs-stepper.min.css" />
    <!-- dropzonejs -->
    <link rel="stylesheet" href="admin/plugins/dropzone/min/dropzone.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
    <link rel="icon" type="image/x-icon" href="../image/kisanarea.png" />

</head>

<body class="hold-transition sidebar-mini font">
<?php
    require './includes/menu.php';
    ?>
<?php 
     include('./dbconn.php');
     $username = $_SESSION['username'];
      $mybookings = mysqli_query($conn, "SELECT * from bookings WHERE username = '$username'");
   
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container d-flex justify-content-center font">

                <b>
                </b>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                </div>
            </div>

            <?php
            
            $rr = mysqli_num_rows($mybookings);
            if (!$rr) {
                echo "<h2 style='color:red'>No bookings found !!!</h2>";
            } else {
            ?>
                <h2>All bookings</h2>

                <table class="table table-bordered table-hover mb-2">
                    <tr>
                        <th colspan="7"><a href="add-product.php">Add New Product</a></th>
                    </tr>
                    <tr class=" success">
                        <th>S.No</th>
                        <!-- <th>Name</th> -->
                        <th>Car</th>
                        <th>Return Date</th>
                        <th>Pickup Date</th>
                        <th>Price</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <?php

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($mybookings)) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        // echo "<td>" . $row['name'] . "</td>";
                    ?>
                        <td class="w-25 ">
                            <?php
                            echo "<td>" . $row['car'] . "</td>";
                            echo "<td>" . $row['return_date'] . "</td>";
                            echo "<td>" . $row['pickup_date'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            ?>
                        <td><a href="javascript:DeleteProducts('<?php echo $row['id']; ?>')" class="btn btn-danger">Delete</a></td>

                    <?php
                        echo "<td><a href='updateProd.php?page=updateProd&pid=" . $row['id'] . "' class='btn btn-secondary'>Update</a></td>";
                        echo "</tr>";
                        $i++;
                    }
                    ?>

                </table>
            <?php } ?>
        </section>
        <footer class="d-flex justify-content-center mt-5">
            <strong>Copyright &copy; 2022
                <a href="#">Sawari</a>.</strong>
        </footer>
    </div>

    <?php

    ?>
    <script>
        function DeleteProducts(id) {
            if (confirm("Do you want to delete this product?")) {
                alert("Product Deleted");
                window.location.href = "productDelete.php?id=" + id;
            }
        }
    </script>
</body>


</html>