<?php
	session_start();
	include('dbcon.php');
	$orderid = $_SESSION['ord'];
	$cusid = $_SESSION['cusid'];
	$amount = $_SESSION['total'];
	$date = date("Y-m-d");

	$status = "Not Delivered";

	mysql_query("INSERT INTO orders (Order_ID, Cus_ID, Amount, Date, Status) VALUES ('$orderid', '$cusid', '$amount', '$date', '$status')")or die(mysql_error());

		?>
			<script>
			
			window.location = "success.php";
			
			</script>
?>
