<?php
	include('dbcon.php');

$proid=$_GET['id'];	
$sqlSelectSpecProd = mysql_query("select * from cart where Product_ID = '$proid'") or die(mysql_error());

											$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);

											$quan = $getProdInfo["Quantity"];


	$newmin = $quan - 1;

	$sqlSelectSpecProd = mysql_query("select * from product where Product_ID = '$proid'") or die(mysql_error());

											$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);

	$amt = $getProdInfo["Price"];
	$newamt = $newmin * $amt;

	$sqlSelectSpecProd = mysql_query("update cart SET Quantity = '$newmin', Amount = '$newamt' where Product_ID = '$proid'") or die(mysql_error());


	?>

		<SCRIPT>
		window.location = "index.php";
		
	</SCRIPT>