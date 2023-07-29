<?php
include './dbconn.php';



session_start();

if (isset($_SESSION['username'])) {
    // user is logged in

    // got username from session
    $username = $_SESSION['username'];

    // Retrieve the profile photo name and fullname from the database based on the username
    $sql = "SELECT profilePhoto, fullname FROM users WHERE username = '$username'";
    $userProfile = $conn->query($sql);

    if ($userProfile && $userProfile->num_rows > 0) {
        $row = $userProfile->fetch_assoc();
        // got profile photo name from database
        $photoname = $row['profilePhoto'];
        $fullname = $row['fullname'];
    }
}
?>
<header>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/Sawari.PNG" width="50px" height="50px" alt="error loading image">
                <!-- <link rel="stylesheet" href="login.css"> -->
            </a>
            <?php
            if (isset($_SESSION['username'])) {
                // User is logged in
                echo '<ul class="navbar-nav" style="display: flex; align-items: center;">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Bookings</a>
    </li>
    <li id="logout" class="nav-item">
        <a class="nav-link" href="./helpers/logout.php">Log out</a>
    </li>
    <li class="nav-item">
    <img src="./uploads/' . $photoname . '" style="height: 60px; width: 60px; border-radius: 50%; border: 2px solid #0591f6;">
            </li>
            </ul>';
            } else {
                // User is not logged in
                echo ' <ul class="navbar-nav" style="display: flex; align-items: center;">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="./login.php" class="nav-link"> <button id="login-btn" style="width: 100px;">
                            <p style="margin-bottom: 2px;">Log in</p>
                        </button></a>
                </li>
            </ul>';
            } ?>
        </div>
    </nav>




</header>