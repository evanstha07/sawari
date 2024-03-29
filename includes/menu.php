<?php
session_start();
?>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container-fluid">
            <div class="container px-4 w-75">
                <div class="navbar-brand">
                    <a href="./index.php"><img class="img-fluid" src="./assets/img/Sawari.PNG" style="width: 11%;" href="./index.php" alt="Sawari"></a>
                    <!-- <a href="./index.php"><b class="font">Sawari</b></a> -->

                </div>
            </div>
            <div class="container w-75" style="font-family:'Lora', serif; font-size:17px; margin-left: 150px;">
                <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-0 ms-lg-4 ">
                        <li class="nav-item">
                            <a class="nav-link active text-dark px-4" aria-current="page" href="./index.php"><b class="hov">Home</b></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark px-4" href="./about.php"> <b class="hov">About</b></a>
                        </li>

                        <li class="nav-item">
                            <?php if (isset($_SESSION['username'])) { ?>
                                <div class="dropdown show">
                                    <a class="nav-link text-dark px-4 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <b><?php echo $_SESSION['username']; ?></b>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                        <a class="dropdown-item" href="./mybooking.php">Bookings</a>
                                    </div>

                                </div>
                            <?php } else { ?>
                                <a class="nav-link a text-dark px-4" href="./registration.php">
                                    <b class="hov">Register</b>
                                </a>
                            <?php } ?>

                        </li>

                        <li class="nav-item">
                            <!-- <a class="nav-link a text-dark px-4" href="./logout.php"><b class=" hov"> -->
                            <?php if (!isset($_SESSION['username'])) {
                                echo '<a class="nav-link a text-dark px-4" href="./login.php"><b class="hov">Login</b></a>';
                            }
                            ?>
                            </b></a>
                        </li>

                        <li>
                            <?php if (isset($_SESSION['username'])) {
                                echo '<b><a class="nav-link text-dark px-4" href="./logout.php">Logout</a></b>';
                            }
                            ?>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>