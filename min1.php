<?php
	include('dbcon.php');



$proid=$_GET['id'];	
$sqlSelectSpecProd = mysql_query("select * from cart where Product_ID = '$proid'") or die(mysql_error());

											$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);

											$quan = $getProdInfo["Quantity"];

	$newmin = $quan - 1;

	if($newmin < 1){
		?>
			<script>

			alert('Menimum Quantity is 1');
			window.location = "checkout.php";
			
			</script>
		<?php
	}else{
	$sqlSelectSpecProd = mysql_query("select * from product where Product_ID = '$proid'") or die(mysql_error());

											$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);

	$amt = $getProdInfo["Price"];
	$newamt = $newmin * $amt;

	$query=mysql_query("select * from product where Product_ID = '$proid'") or die(mysql_error());
			$row=mysql_fetch_array($query);
			$dquan = $row["Quantity"];
	$newquan = $dquan + 1;
						 
			mysql_query("UPDATE product SET Quantity = '$newquan' WHERE Product_ID = '$proid'")or die(mysql_error());

	$sqlSelectSpecProd = mysql_query("update cart SET Quantity = '$newmin', Amount = '$newamt' where Product_ID = '$proid'") or die(mysql_error());


	?>

		<SCRIPT>
		window.location = "checkout.php";
		
	</SCRIPT>
	<?php }?>