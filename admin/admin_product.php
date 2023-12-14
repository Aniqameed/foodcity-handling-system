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
<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%">
		<div class="container" style="width: 100%; ">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">
	<div class="agileits_search2" >
					
				</div>
	

			<?php include('sidebar/side_pro.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%" ><i class="fa fa-sort-amount-asc"></i> View All</div></h3></font><br>
			<table class="table table-bordered" style = "width: 82%; font-family: ubuntu;">

						<thead>
							<tr>
								<th><center>Product ID</center></th>
								<th><center>Product Name</center></th>
								<th><center>Quantity</center></th>
								<th><center>Price</center></th>
								<th><center>Description</center></th>
								<th><center>Admin_ID</center></th>
								<th><center>Category ID</center></th>
								<th><center>Date</center></th>
								<th><center>Image</center></th>
								<th><center>Update</center></th>
								<th><center>Remove</center></th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../dbcon.php');
							$result = mysqli_query($conn,"SELECT * FROM product");
							while($row = mysqli_fetch_array($result))
								
								{
									?>

							<tr class="rem1">
								<td class="invert"><?php echo $row['Product_ID']; $id = $row['Product_ID'];?></td>
								<td class="invert">
									<?php echo $row['Name']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Quantity']; ?>
								</td>
								<td class="invert">
									Rs.<?php echo $row['Price']; ?>.00
								</td>
								<td class="invert">
									<?php echo $row['Description']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Admin_ID']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Cat_ID']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Date']; ?>
								</td>
								<td class="invert-image">
									<img src="../uploads/<?php echo $row['Imgurl'];?>" alt=" " class="img-responsive" width = "100px" height = "100px" align = "left">
								</td>
									<td class="invert">
										<a href="admin_pro_update.php?id=<?php echo $id; ?>">
										<center><i class="fa fa-edit fa-lg text-success"></i></center>
									</a>
								</td>
								<td class="invert">
									
										<div class="snipcart-details10 top_brand_home_details item_add single-item hvr-outline-out">
											
											<input type="submit" name="submit" value="Remove" class="button10" onclick = "window.location.href='Pro_delete.php?id=<?php echo $id; ?>'"/></a>
										</div>
									</div>
								</td>
							</tr>
							<?php }
							?> 
							
						</tbody>
					</table>
				</div>
				</div>
			</div>
			</div></div></div>
			
</body>

<?php include('admin_footer.php'); ?>
</html>

