<?php
include('./dbconn.php');

$cid = $_GET['oid'];
$orders = mysqli_query($conn, "SELECT * FROM cars WHERE id = '$cid'");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $propertyID = $cid;
    $username = $_SESSION["username"];
    header("Location:booking.php?oid=" . $cid);
}
// Save Business Contact Info
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawari | Booking</title>
    <link rel="stylesheet" href="./booking.css" </head>

<body>
    <h1>Car Booking</h1>


    <form method="POST" action="">
        <label for="car">Select a Car:</label>
        <select name="car" id="car">
            <!-- Populate options with car data from your database -->
            <option value="car_id">car1</option>
            ?
            <!-- Add more options -->
        </select>

        <label for="pickup_date">Pickup Date:</label>
        <input type="date" name="pickup_date" id="pickup_date" required>

        <label for="return_date">Return Date:</label>
        <input type="date" name="return_date" id="return_date" required>

        <!-- <label for="extras">Additional Extras:</label>
        <input type="checkbox" name="extras[]" value="insurance">Insurance
        <input type="checkbox" name="extras[]" value="gps">GPS -->

        <button type="submit">Book Now</button>
    </form>
</body>

</html>