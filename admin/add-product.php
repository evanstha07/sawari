<!DOCTYPE html>
<html>

<head>
    <title>Sawari | Add New Car</title>

</head>

<body>
    <?php
    require "../dbconn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $brand = $_POST['brand'];
        $car_type = $_POST['car_type'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $price = $_POST['price'];

        // if (empty($car_name) || empty($brand) || empty($car_type) || empty($isAvailable) || empty($model) || empty($year) || empty($price)) {
        //     die("Please fill in all required fields.");
        // }
        try {
            $sql = mysqli_query($conn, "INSERT INTO cars (brand,car_type, model, year, price) VALUES ('$brand','$car_type','$model','$year', '$price')");

            echo "<script>alert('Car added successfully.');</script>";
        } catch (Exception $e) {
        }
    }
    ?>

    <h1>Sawari Cars</h1>
    <div class="product-form">
        <form action="" method="POST">

            <div class="form-group">
                <label for="brand">Brand:</label>
                <select id="brand" name="brand">
                    <option value="Hyundai">Hyundai</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Honda">Honda</option>
                    <option value="KIA">KIA</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Skoda">Honda</option>
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
                <input type="submit" value="Add car">
            </div>


    </div>
    <!-- <div class="form-group">
                <label for="pickup-date">Pickup Date:</label>
                <input type="date" id="pickup-date" name="pickubrand">
            </div>
            <div class="form-group">
                <label for="return-date">Return Date:</label>
                <input type="date" id="return-date" name="return_date"> -->
    <!-- </div> -->
    <!-- <div class="form-group">
            <label for="customer-name">Name:</label>
            <input type="text" id="customer-name" name="customer_name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="customer-phone">Phone Number:</label>
        <input type="tel" id="customer-phone" name="customer_phone" placeholder="Enter your phone number" required>
    </div>
    <div class="form-group">
        <label for="customer-email">Email:</label>
        <input type="email" id="customer-email" name="customer_email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <label for="customer-address">Address:</label>
        <input type="text" id="customer-address" name="customer_address" placeholder="Enter your address" required>
    </div> -->


    </form>
    </div>
</body>

</html>