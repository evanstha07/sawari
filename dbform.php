<?php
include("./dbconn.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];

if (isset($fname) && ($lname)) {
    $sql = "INSERT INTO users(fname,lname) VALUES ('$fname','$lname')";
} else {
    echo "fname must be filled";
}

if ($conn->query($sql) > 0) {
    // if ($mysqli->query($sql1) > 0) {
    echo "User Registered Successfully";
} else {
    echo ('Error while registering');
}
