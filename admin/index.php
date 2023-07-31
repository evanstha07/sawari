<?php
include('../dbconn.php');
session_start();
extract($_POST);

if (isset($login)) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $que = mysqli_query($conn, "SELECT * FROM admin WHERE user='$user' AND pass='$pass'");
    $row = mysqli_num_rows($que);
    if ($row) {
        $_SESSION['admin'] = $user;
        echo "<script>alert('Admin Login Successful');window.location.href='./dashboard.php';</script>";
    } else {
        $err = "<center><font style='Loco' color='red'>Invalid Username and Password!!</font></center>";
    }
}
?>


<html lang="en">

<head>
    <title>Sawari | Admin Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        body {
            position: relative;
            /* Needed for the ::before pseudo-element */
            background-image: url("../assets/img/pexels-photo-3457780.webp");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 90vh;
            /* Adjust the height as needed */
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../assets/img/pexels-photo-3457780.webp");
            opacity: 0.5;
            /* Adjust the opacity value as needed (0 to 1) */
        }
    </style>
    <!-- <script src="./js/validate.js"></script> -->
    <!-- Website Logo -->
    <!-- <link rel="icon" type="image/x-icon" href="./assets/Sawari.PNG" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<body class="bg-dark font">

    <!-- <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-5 d-flex justify-content-center m-auto">
                <div class="d-flex justify-content-center mb-3 mt-5 wid text-white" style="border-radius: 25px;">
                    <h3><a href="#" class="nav-link text-white"><b class="hov">Admin Login</b></a></h3>
                </div>
            </div>
        </div>
    </div> -->
    </section>
    <section class="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-5 d-flex justify-content-center m-auto">
                    <div class="card mb-5 p-4 py-0 text-black w-75 border-2 border-success" style="border-radius: 25px;">
                        <div class="border-2 card-body px-0 py-0 rounded-2" style="align-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    align-self: center; 
    margin-top: 50%; "> <!-- <img src="../assets//img///audi.jpg" alt="background image" style="background-size: cover; background-position: center center; "> -->

                            <h4 class="text-success d-flex justify-content-center mt-2 mb-2 font" style="color: #ffffff;">Admin Login </h4>
                            <form method=" POST" class="mt-2">
                                <fieldset style="width:300px; height:150px; padding: 20px;">

                                    <div class=" form-group">
                                        <label for="username" class="mb-1" style="color: #ffffff;"><b>Username</label>
                                        <span class="text-danger" style="color: #ffffff;">*</span></b> <input class="form-control mb-2 border-success" name="user" type="text" required placeholder="Username">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password" class="mb-1" style="color: #ffffff;"><b>Password</label>
                                        <span class=" text-danger" style="color: #ffffff;">*</span></b>
                                        <input class="form-control mb-1 border-success" placeholder="Password" name="pass" type="password" required>
                                    </div>

                                    <div class="form-group d-flex form-group justify-content-center">
                                        <input name="login" type="submit" value="Login" class="d-flex justify-content-between btn text-white bg-dark btn-block" style="justify-content:center;">
                                    </div>
                                    <?php echo @$err; ?>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <!-- <script src="../css/css/jquery.min.js"></script> -->

        <!-- Bootstrap Core JavaScript -->
        <!-- <script src="../css/css/bootstrap.min.js"></script> -->

        <!-- Metis Menu Plugin JavaScript -->
        <!-- <script src="../css/css/metisMenu.min.js"></script> -->

        <!-- Custom Theme JavaScript -->
        <!-- <script src="../css/css/sb-admin-2.js"></script> -->

</body>

</html>