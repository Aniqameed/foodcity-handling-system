<?php
$proid=$_GET['id'];	
include('dbcon.php');
			$query=mysqli_query($conn,"select * from product where Product_ID = '$proid'") or die(mysqli_error($conn));
			$row=mysqli_fetch_array($query);
			$dquan = $row["Quantity"];
			if($row["Quantity"] < 1){
				?>
				<script>
			alert('Product Finished.. Try Again Later');
			window.location = "checkout.php";
			
			</script>
				<?php

			}else{


$sqlSelectSpecProd = mysqli_query($conn,"select * from cart where Product_ID = '$proid'") or die(mysqli_error($conn));

											$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);

											$quan = $getProdInfo["Quantity"];

	$newpl = $quan + 1;
	$sqlSelectSpecProd = mysqli_query($conn,"select * from product where Product_ID = '$proid'") or die(mysqli_error($conn));

											$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);

	$amt = $getProdInfo["Price"];
	$newamt = $newpl * $amt;

	

			$newquan = $dquan - 1;


						 
			mysqli_query($conn,"UPDATE product SET Quantity = '$newquan' WHERE Product_ID = '$proid'")or die(mysqli_error($conn));

	mysqli_query($conn,"update cart SET Quantity = '$newpl', Amount = '$newamt' where Product_ID = '$proid'") or die(mysqli_error($conn));



	?>


	<SCRIPT>
		window.location = "index.php";

	</SCRIPT>

	<?php }?>