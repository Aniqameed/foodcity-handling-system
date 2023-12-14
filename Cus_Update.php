<?php
	include('dbcon.php');
	session_start();
	$cusid = $_SESSION['cusid'];

	$cname=$_POST['name'];
	$mail=$_POST['email'];
	$pass=$_POST['ConfirmPassword'];
	$add=$_POST['address'];
	
	$phone=$_POST['phone'];

		
	
	
		mysqli_query($conn,"UPDATE customer SET Cus_Name='$cname',Cus_Pass='$pass', Cus_Address='$add', Cus_Phone='$phone', Cus_Mail='$mail'  WHERE Customer_ID='$cusid'");
		
	

	?>

	<SCRIPT>
		alert("Customer Updated");
		window.location = "index.php";
	</SCRIPT>

