<?php
	include('dbcon.php');



$proid=$_GET['id'];	
$sqlSelectSpecProd = mysqli_query($conn,"select * from cart where Product_ID = '$proid'") or die(mysqli_error($conn));

											$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);

											$quan = $getProdInfo["Quantity"];

	$newmin = $quan - 1;

	if($newmin < 1){
		?>
			<script>

			alert('Menimum Quantity is 1');
			window.location = "checkout.php";
			
			</script>
		<?php
	}
	else {
	$sqlSelectSpecProd = mysqli_query($conn,"select * from product where Product_ID = '$proid');

											$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);

	$amt = $getProdInfo["Price"];
	$newamt = $newmin * $amt;
	

	$query=mysqli_query("select * from product where Product_ID = '$proid'") or die(mysqli_error());
			$row=mysql_fetch_array($query);
			$dquan = $row["Quantity"];
	$newquan = $dquan + 1;
						 
			mysqli_query($conn,"UPDATE product SET Quantity = '$newquan' WHERE Product_ID = '$proid'");

	$sqlSelectSpecProd = mysqli_query($conn,"update cart SET Quantity = '$newmin', Amount = '$newamt' where Product_ID = '$proid'");


	?>

		<SCRIPT>
		window.location = "checkout.php";
		
	</SCRIPT>
	<?php }?>