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
    <div class="container" >
        <div class="header">
            <h2>Sawari | Registration Form</h2>
        </div>
            
            <form action="registration.php" method="post">
            <div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="repeat" placeholder="Repeat Password:">
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
</div>
</body>
</html>