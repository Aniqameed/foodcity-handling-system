<?php
	include('../dbcon.php');
	session_start();
	$supid = $_SESSION['supid'];
	$sname=$_POST['supname'];
	$add=$_POST['add'];
	$mail=$_POST['email'];
	$phone=$_POST['phone'];
	

		mysqli_query($conn,"UPDATE supplier SET Sup_Name='$sname', Sup_Address='$add', Sup_Mail='$mail', Sup_Phone='$phone' WHERE Supplier_ID='$supid'");
		?>
		<SCRIPT>
			alert("Update Success");
			window.location = "admin_sup_update.php";
		</SCRIPT>
		<?php

	?>