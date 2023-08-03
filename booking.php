<?php
session_start();
include('./dbconn.php');
$cid = $_GET['pid'];
$car = mysqli_query($conn, "SELECT * FROM cars WHERE id = '$cid'")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawari | Booking</title>
    <link rel="stylesheet" href="./booking.css">
    <link rel="stylesheet" href="./css/bootstrap.css">

</head>

<body>
    <h1>Car Booking</h1>

    <form method="POST" action="./bookCardb.php?pid=<?php echo $cid; ?>">
        <label for="car">Your booking:</label>
        <p><?php echo $car['brand'] . " " . $car['model']; ?></p>

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