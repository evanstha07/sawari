<?php
session_start();
require "../dbconn.php";
include '../includes/aside.php';

// Edit Products
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $photo = $_FILES['photo']['name'];
    $brand = $_POST['brand'];
    $car_type = $_POST['car_type'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $mileage = $_POST['mileage'];
    $fuel_type = $_POST['fuel_type'];
    $seat_capacity = $_POST['seat_capacity'];
    $boot_capacity = $_POST['boot_capacity'];


    try {
        $target_path = "uploads/products/";
        $target_path = $target_path . basename($_FILES['photo']['name']);

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
            '<script>console.log("File uploaded successfully!");</script>';
        } else {
            '<script>console.log("File upload failed, please try again!");</script>';
        }

        $query = mysqli_query($conn, "INSERT INTO cars (photo,brand,car_type,model,year,price,mileage,fuel_type, seat_capacity,boot_capacity)
        VALUES ('$photo','$brand','$car_type','$model','$year', '$price', '$mileage', '$fuel_type', '$seat_capacity', '$boot_capacity')");
    } catch (Exception $e) {
        $message = 'Unable to add new product.' . $e;
        throw new Exception('Unable to save details.', 0, $e);
    }

    if ($conn->affected_rows == 0) {
        echo '<script>alert("Cannot Add Car");window.location.href = "./add-product.php"
        </script>';
    } else {
        echo '<script>alert("Car Added Succesfully");window.location.href = "dashboard.php";</script>';
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
                    <option value="Hatchbag">Hatchback</option>
                </select>
            </div>

            <div class="form-group">
                <label>Photo URL</label>
                <input type="file" name="photo" id="photo" class="" required placeholder="Photo URL" multiple>
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
                <label for="mileage">Mileage:</label>
                <input type="number" id="mileage" name="mileage" min="0" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="fuel_type">Fuel Type:</label>
                <select id="fuel_type" name="fuel_type" required>
                    <option value="diesel">Diesel</option>
                    <option value="petrol">Petrol</option>
                </select>
            </div>


            <!-- <div class="form-group">
                <label for="transmission">Transmission:</label>
                <input type="text" id="transmission" name="transmission" required>
            </div> -->

            <div class="form-group">
                <label for="seat_capacity">Seat Capacity:</label>
                <input type="number" id="seat_capacity" name="seat_capacity" min="0" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="boot_capacity">Boot Capacity:</label>
                <input type="number" id="boot_capacity" name="boot_capacity" min="0" step="0.01" required>
            </div>

            <div class="form-group">
                <input type="submit" name="submit_prod" id="submit" class="btn btn-outline-dark" value="Add">
            </div>
        </form>
    </div>

</body>

</html>