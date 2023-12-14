<?php
	include('dbcon.php');

$proid=$_GET['id'];	
$sqlSelectSpecProd = mysqli_query($conn,"select * from cart where Product_ID = '$proid'") ;

											$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);

											$quan = $getProdInfo["Quantity"];


	$newmin = $quan - 1;

	$sqlSelectSpecProd = mysqli_query($conn,"select * from product where Product_ID = '$proid'");

											$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);

	$amt = $getProdInfo["Price"];
	$newamt = $newmin * $amt;

	$sqlSelectSpecProd = mysqli_query($conn,"update cart SET Quantity = '$newmin', Amount = '$newamt' where Product_ID = '$proid'");


	?>

		<SCRIPT>
		window.location = "index.php";
		
	</SCRIPT>