<?php
session_start();
$admin = $_SESSION['id1'];
include('../conn.php');
date_default_timezone_set('Asia/Colombo');
$time = date("h:i:s A");
	$date = date("Y-m-d");
mysqli_query($conn,"UPDATE admin SET onoff = 'offline', L_Time = '$time', L_Date = '$date' WHERE Admin_ID = '$admin'");

$_SESSION['id1'] = "";
header('location:admin-login.php');
?>