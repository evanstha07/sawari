


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawari | Registration Form </title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["submit"])) {
    $Fullname = $_POST["fullname"];
    $Address = $_POST["address"];
    $Phone = $_POST["phone"];
    $Email = $_POST["email"];
    $Username = $_POST["username"];
    $Password = $_POST["password"];
    $Repeat = $_POST["repeat"];
    $PasswordHash = password_hash($Password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($Fullname) OR empty($Address) OR empty($Phone) OR empty($Email) OR empty($Username) OR empty($Password) OR empty($Repeat)) {
        array_push($errors, "Please fill all the fields");
    }

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Please enter a valid email address");
    }

    if (strlen($Password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }

    if ($Password !== $Repeat) {
        array_push($errors, "Password does not match");
    }
    require_once "dbconn.php";

    $sql = "SELECT * FROM users WHERE email = '$Email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        array_push($errors, "Email already exists");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // Ensure the hashed password doesn't exceed the allowed length (e.g., 255)
        $PasswordHash = substr($PasswordHash, 0, 255);

        $sql = "INSERT INTO users (fullname, address, phone, email, username, password) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "ssssss", $Fullname, $Address, $Phone, $Email, $Username, $PasswordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>Registration Successful</div>";
        } else {
            die("Something went wrong");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawari | Registration Form</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Sawari | Registration Form</h2>
            <img src="./assets/img/Sawari.PNG" alt="logo" width="100px" height="100px">
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat" placeholder="Repeat Password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
    </div>
</body>
</html>

       