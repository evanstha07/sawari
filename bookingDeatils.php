<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
            include "./sawari/booking.php";
            session_start();

            // Check if the user is logged in
            if (!isset($_SESSION['user_id'])) {
                header("Location: login.php");
                exit();
            }

            // Fetch booking details from the database
            $booking_id = $_GET['id']; // Assuming you pass the booking ID through the URL
            $user_id = $_SESSION['user_id'];

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            

            $query = "SELECT * FROM bookings WHERE id = $booking_id AND user_id = $user_id";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $booking = mysqli_fetch_assoc($result);
            } else {
                echo "Error fetching booking details: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        ?>

        

    </div>
</body>
</html>
