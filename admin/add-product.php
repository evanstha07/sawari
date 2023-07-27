<!DOCTYPE html>
<html>

<head>
    <title>Sawari | Add New Car</title>

</head>

<body>
    <?php
    require_once "../dbconn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $car_name = $_POST['car_name'];
        $car_type = $_POST['car_type'];
        $brand = $_POST['brand'];
        $isAvailable = $_POST['isAvailable'];

        if (empty($car_name) || empty($car_type) || empty($brand) || empty($isAvailable)) {
            die("Please fill in all required fields.");
        }

        $sql = "INSERT INTO cars (car_name,car_type,brand, isAvailable) VALUES ('$car_name','$car_type','$brand','$isAvailable')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Car reserved successfully.";
        } else {
            echo "Error reserving car";
        }
    }
    ?>

    <h1>Sawari Cars</h1>
    <div class="product-form">
        <form action="" method="POST">
            <div class="form-group">
                <label for="product_name">Car Name:</label>
                <input type="text" id="car_name" name="car_name" placeholder="Enter product name" required>
            </div>
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
                <label for="isAvailable">isAvailable:</label>
                <select name="isAvailable" required id="isAvailable">
                    <option value="1">Available</option>
                    <option value="2">Not Available</option>
                </select>
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

            <div class="form-group">
                <button type="submit">Submit Reservation</button>
            </div>
        </form>
    </div>
</body>

</html>