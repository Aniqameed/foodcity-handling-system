<?php 
$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "active";
	$a5 = "";
	$a6 = "";
	$a7 = "";
	$a8 = "";
	$a9 = "";

include('admin_header.php'); ?>
<!DOCTYPE html>

<html>
	<head>
		<title>ADMIN | PRODUCT </title>
	</head>
	<body>
		
		<div class="ban-top">
<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%;">
		<div class="container" style="width: 100%;">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">
	
	
	
			<?php include('sidebar/side_pro.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%"><i class="fa fa-search"></i> Search</div></h3></font>
			
			<div class="agileits_search2">

					<form action="pro_search.php" method="post">
					
						<input name="Search" type="search" placeholder="Search By ID" required="" size = "5">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					
					</form>
				</div>
				<?php 
				if(isset($_POST['Search'])){
					$proid = $_POST['Search'];
					$query = mysqli_query($conn,"select * from product where Product_ID = '$proid'")or die(mysqli_error($conn));
					$count1 = mysqli_num_rows($query);

					if ($count1 > 0){ 
						include('../conn.php');
								$query=mysqli_query($conn,"select * from product where Product_ID = '$proid'");
								$row=mysqli_fetch_assoc($query);
						?>

						<div style = "padding-left: 20%; padding-top: 5%">
						<font face = "ubuntu" size="5" color = green><b>Result</b></font><br>
						<table style = "font-family: ubuntu; font-size: 18px;">
						<font face = "ubuntu" size="4">
						<tr>
						<td>Product ID</td><td> : </td><td> <?php echo $row['Product_ID']; $id = $row['Product_ID']; ?></td></tr>
						<tr><td>Product Name</td><td> : </td><td> <?php echo $row['Name'];?> </td></tr>
						<tr><td>Product Price</td><td> : </td><td> <?php echo $row['Price'];?> </td></tr>
						<tr><td>Product Description</td><td> : </td><td> <?php echo $row['Description'];?> </td></tr>
						<tr><td>Category ID</td><td> : </td><td> <?php echo $row['Cat_ID'];?> </td></tr>
						<tr><td>Date</td><td> : </td><td> <?php echo $row['Date'];?> </td></tr>
						<tr><td>Image</td><td> : </td><td><td></td></tr><tr><td><img src = "../uploads/<?php echo $row['Imgurl'];?>" width = 150 height = 150> </td></tr></table>
					</font></div>
					<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 800px; padding-right: 245px">
											
						<input type="submit" name="save" value = "Update"  class="button11" onclick = "window.location.href='admin_pro_update.php?id=<?php echo $id; ?>'"/></div>
						<?php
				}
				else{
					?>
					<SCRIPT>
					alert("Product Not Found");
					</SCRIPT>
					<?php
				}}
				?>
			
		</div>

	</div></div></div></div>
</body>

<?php include('admin_footer.php'); ?>
</html>

