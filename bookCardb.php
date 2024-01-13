<?php
session_start();
include('./dbconn.php');

// Check if 'pid' exists in the URL parameters
if (isset($_GET['pid'])) {
    $cid = $_GET['pid'];
    $price = $_GET['price'];
    $car = mysqli_query($conn, "SELECT * FROM cars WHERE id = '$cid'")->fetch_assoc();
    $selectedCar = $car['brand'] . " " . $car['model'];
    $currentDate = date("Y-m-d");
    $pickupDate = $_POST["pickup_date"];
    $returnDate = $_POST["return_date"];
    $price = $car['price'];
    $date1 = new DateTime($pickupDate);
    $date2 = new DateTime($returnDate);
    $duration = $date1->diff($date2);
    $differenceInDays = $duration->days;
    $finalPrice = $differenceInDays * $price;

    // Calculate the base price for the selected number of days
    $basePrice = $differenceInDays * $price;

    // Apply a 5% discount for bookings of more than 3 days
    if ($differenceInDays > 3) {
        $discount = 0.05; // 5% discount
        $discountedAmount = $basePrice * $discount;
        $finalPrice = $basePrice - $discountedAmount;
    } else {
        $finalPrice = $basePrice;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Fetch data from the form
        if ($pickupDate < $currentDate || $returnDate < $currentDate) {
            echo '<script>
            alert("Invalid date!!!");window.location.href="index.php";
            </script>';
        } else if ($returnDate <= $pickupDate) {
            echo '<script>
            alert("Return date must be after pickup date.");window.location.href="index.php";
            </script>';
        } else {
            // $price = $_POST["price"];

            // Check if the user is logged in before accessing the session variable
            $username = isset($_SESSION["username"]) ? $_SESSION["username"] : "Guest";

            // SQL query to insert data into the bookings table
            $sql = "INSERT INTO bookings (car, pickup_date, return_date, username, price) VALUES ('$selectedCar', '$pickupDate', '$returnDate', '$username','$finalPrice')";

            if ($conn->query($sql) === true) {
                echo "<script>alert('Booking successful.');window.location.href='./index.php'</script>;";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Car ID (pid) not provided in the URL.";
    }
}

// Close the database connection
$conn->close();

// Function to calculate the final price based on the number of booking days
function calculateFinalPrice($differenceInDays, $pricePerDay)
{
    $basePrice = $pricePerDay;
    $increasePercentage = 0;

    if ($differenceInDays > 1 && $differenceInDays < 2) {
        $increasePercentage = 0.20;
    } elseif ($differenceInDays > 5) {
        $increasePercentage = 0.25;
    }

    // Calculate the final price with the increase percentage
    $finalPrice = $basePrice * $differenceInDays * (1 + $increasePercentage);

    return $finalPrice;
}
