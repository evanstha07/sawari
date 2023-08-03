<?php
session_start();
include('./dbconn.php');

// Check if 'pid' exists in the URL parameters
if (isset($_GET['pid'])) {
    $cid = $_GET['pid'];
    $car = mysqli_query($conn, "SELECT * FROM cars WHERE id = '$cid'")->fetch_assoc();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Fetch data from the form
        $selectedCar = $car['brand'] . " " . $car['model'];
        $pickupDate = $_POST["pickup_date"];
        $returnDate = $_POST["return_date"];
        $price = $_POST["price"];

        // Check if the user is logged in before accessing the session variable
        $username = isset($_SESSION["username"]) ? $_SESSION["username"] : "Guest";

        // SQL query to insert data into the bookings table
        $sql = "INSERT INTO bookings (car, pickup_date, return_date, username, price) VALUES ('$selectedCar', '$pickupDate', '$returnDate', '$username','$price')";

        if ($conn->query($sql) === true) {
            echo "<script>alert('Booking data saved successfully.');window.location.href='./index.php'</script>;";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Car ID (pid) not provided in the URL.";
}

// Close the database connection
$conn->close();
