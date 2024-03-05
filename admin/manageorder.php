<?php
session_start();
include '../dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sawari | Manage User</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
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
    <link rel="icon" type="image/x-icon" href="../image/kisanarea.png" />

</head>

<body class="hold-transition sidebar-mini font">
    <?php
    include '../includes/aside.php';
    ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container d-flex justify-content-center font">
                <b>
                    <h1>Manage Bookings</h1>
                </b>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="card card-default">
                    </div>
                </div>


                <?php
                $q = mysqli_query($conn, "SELECT * FROM bookings");
                $rr = mysqli_num_rows($q);
                if (!$rr) {
                    echo "<h2 style='color:red'>No any booking exists !!!</h2>";
                } else {
                ?>
                    <script>
                        function DeleteOrder(id) {
                            if (confirm("Do you want to delete this order?")) {
                                alert("Order Deleted Successfully")
                                window.location.href = "deleteorder.php?id=" + id;
                            }
                        }
                    </script>
                    <b class="hov font">
                        <h2 class="">All Bookings</h2>
                    </b>

                    <table class="table table-hover table-bordered">
                        <Tr class="success">
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Pickup Date</th>
                            <th>Return Date</th>
                            <th>Price</th>

                            <th>Delete</th>
                        </tr>
                        <?php


                        $i = 1;
                        while ($row = mysqli_fetch_assoc($q)) {

                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['pickup_date'] . "</td>";
                            echo "<td>" . $row['return_date'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";

                        ?>

                            <td><a href="javascript:DeleteOrder('<?php echo $row['id']; ?>')" class="btn btn-danger">Delete</a></td>
                        <?php
                            echo "</tr>";
                            $i++;
                        }
                        ?>

                    </table>
                <?php } ?>
            </section>
        </section>
    </div>
</body>
<footer class="d-flex justify-content-center mt-5">
    <strong>Copyright &copy; 2022
        <a href="#">Sawari </a>.</strong>
</footer>

</html>