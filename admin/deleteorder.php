<?php
include('../includes/dbconn.php');
$pid = $_GET['id'];

$q = mysqli_query($mysqli, "DELETE FROM orders WHERE id='$pid'");

header('location:manageorder.php?page=notification');
