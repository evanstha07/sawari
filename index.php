<?php
include './dbconn.php';
if (isset($_SESSION["username"])) {
    echo 'teroba';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawari | Car-Rental</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
</head>

<body>
    <?php
    require './includes/menu.php';
    ?>
    <header class="bg-dark p-3">
        <div class="container my-5">
            <div class="text-center text-white font">
                <h1 class="display-4 fw-bolder font">Sawari - Car Rental at your service</h1>
                <!-- <p class="lead fw-normal text-white-50 mb-0 font"> !!!</p> -->
            </div>
        </div>
    </header>
    <!-- Section-->
    <?php
    $featuredProducts = mysqli_query($conn, "SELECT * FROM cars");
    ?>
    <?php
    include('includes/prod_disp.php');
    ?>
    <?php
    require './includes/footer.php';
    ?>
</body>

</html>