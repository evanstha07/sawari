<?php
require "../dbconn.php";
include '../includes/aside.php';
$photo = 'no-image.jpg';

// Edit Products
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $photo = $_FILES["photo"]["name"];
    $brand = $_POST['brand'];
    $car_type = $_POST['car_type'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    try {
        $target_path = "uploads/products/";
        $target_path = $target_path . basename(
            $_FILES['photo']['name']
        );

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
            '<script>console.log("File uploaded successfully!");</script>';
        } else {
            '<script>console.log("File upload failed, please try again!");</script>';
        }

        $query = mysqli_query($conn, "INSERT INTO cars (photo,brand,car_type, model, year, price) VALUES ('$photo','$brand','$car_type','$model','$year', '$price'");
    } catch (Exception $e) {
        $message = 'Unable to add new product.' . $e;
        throw new Exception('Unable to save details.', 0, $e);
    }

    if ($mysqli->affected_rows == 0) {
        echo '<script>alert("Cannot Add Product");</script>';
        header("Location:../admin/add-product.php");
    } else {
        echo '<script>alert("Product Added Succesfully");window.location.href = "./dashboard.php";SS</script>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sawari | Add New Car</title>
    <link rel="stylesheet" href="./css/add-product.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css" />
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" />
    <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css" />
    <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css" />
    <link rel="stylesheet" href="css/adminlte.min.css" />
</head>

<body>
    <h1>Sawari Cars</h1>
    <div class="product-form">
        <form method="POST" id="ProductDetails" enctype="multipart/form-data">
            <div class="form-group">
                <label for="brand">Brand:</label>
                <select id="brand" name="brand">
                    <option value="Hyundai">Hyundai</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Honda">Honda</option>
                    <option value="KIA">KIA</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Skoda">Skoda</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Jeep">Jeep</option>
                </select>
            </div>

            <div class="form-group">
                <label for="car-type">Car Type:</label>
                <select id="car_type" name="car_type">
                    <option value="Sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                    <option value="Hatchbag">Hatchbag</option>
                </select>
            </div>

            <div class="form-group">
                <label>Photo URL</label>
                <input type="file" name="photo" id="photo" class="" required placeholder="Photo URL">
            </div>

            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" required>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" min="1886" max="2099" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" min="0" step="0.01" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Add Car">
            </div>
        </form>
    </div>

    <!-- <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="plugins/sparklines/sparkline.js"></script>
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script> -->
</body>

</html>