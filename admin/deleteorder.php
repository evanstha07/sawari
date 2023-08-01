<?php
include('../includes/dbconn.php');
$pid = $_GET['id'];

$q = mysqli_query($conn, "DELETE FROM orders WHERE id='$pid'");

header('location:manageorder.php?page=notification');
