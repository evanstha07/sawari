<?php
include('../dbconn.php');
$pid = $_GET['id'];

$q = mysqli_query($conn, "DELETE FROM cars WHERE id='$pid'");

header('location:manageProd.php?page=notification');
