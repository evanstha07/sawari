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

    <!-- <link rel="icon" type="image/x-icon" href="./assets/Sawari.PNG" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

<body background="../assets/img/pexels-photo-3457780.webp" style="opacity:0.8" class="bg-dark font">
    <section class="">
        <div class="container mt-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-5 d-flex justify-content-center m-auto">
                    <div class="card mt-5 p-4 py-0 text-black w-75 border-2" style="border-radius: 25px;">
                        <div class="border-2 card-body px-0 py-0 rounded-2">

                            <h4 class="m-auto d-flex justify-content-center mt-3 mb-4">Admin Login </h4>
                            <form method="POST" class="mt-2">
                                <div class=" form-group mb-3">
                                    <label for="username" class="mb-1"><b>Username</label>
                                    <span class="text-danger">*</span></b> <input class="form-control mb-2 border-dark" name="user" type="text" required placeholder="Username">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="mb-1"><b>Password</label>
                                    <span class=" text-danger">*</span></b>
                                    <input class="form-control mb-1 border-dark" placeholder="Password" name="pass" type="password" required>
                                </div>

                                <div class="form-group d-flex form-group justify-content-center">
                                    <input name="login" type="submit" value="Login" class="d-flex justify-content-center btn text-white bg-dark btn-block">
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