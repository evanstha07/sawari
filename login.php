<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawari | Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "dbconn.php";

    if (isset($_POST["Login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT username,password FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            echo "<script>alert('Login Successful');window.location.href='./index.php'</script>";
            die();
        } else {
            echo "<div class='alert alert-danger'> Invalid username or password</div>";
        }
    } else {
        echo "<div class='alert alert-danger'> Invalid username or password</div>";
    }
    ?>
    <div class="main-container">
        <h1>Sawari | Login</h1>
        <img src="./assets/img/Sawari.PNG" height="50px" width="50px">
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-btn">
                <button type="submit" class="form-btnn" name="Login">Login</button>
            </div>
        </form>
    </div>
    <footer class="d-flex justify-content-center mt-5">
        <strong>Copyright &copy; 2022
            <a href="index.php">Sawari </a>.</strong>
</body>

</html>