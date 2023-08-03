<?php
include('../dbconn.php');
$pid = $_GET['id'];

$q = mysqli_query($conn, "DELETE FROM bookings WHERE id='$pid'");

header('location:manageorder.php?page=notification');
