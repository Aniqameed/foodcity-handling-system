<?php
$proid=$_GET['id'];	
include('dbcon.php');
			$query=mysql_query("select * from product where Product_ID = '$proid'") or die(mysql_error());
			$row=mysql_fetch_array($query);
			$dquan = $row["Quantity"];
			if($row["Quantity"] < 1){
				?>
				<script>
			alert('Product Finished.. Try Again Later');
			window.location = "checkout.php";
			
			</script>
				<?php

			}else{


$sqlSelectSpecProd = mysql_query("select * from cart where Product_ID = '$proid'") or die(mysql_error());

											$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);

											$quan = $getProdInfo["Quantity"];

	$newpl = $quan + 1;
	$sqlSelectSpecProd = mysql_query("select * from product where Product_ID = '$proid'") or die(mysql_error());

											$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);

	$amt = $getProdInfo["Price"];
	$newamt = $newpl * $amt;

	

			$newquan = $dquan - 1;


						 
			mysql_query("UPDATE product SET Quantity = '$newquan' WHERE Product_ID = '$proid'")or die(mysql_error());

	mysql_query("update cart SET Quantity = '$newpl', Amount = '$newamt' where Product_ID = '$proid'") or die(mysql_error());



	?>


	<SCRIPT>
		window.location = "checkout.php";

	</SCRIPT>

	<?php }?>