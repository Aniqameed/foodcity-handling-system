<?php 
$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "active";
	$a8 = "";
	$a9 = "";
include('admin_header.php'); ?>
<!DOCTYPE html>

<html>
	<head>
		<title>ADMIN | SUPPLIER </title>
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
	

			<?php include('sidebar/side_sup.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%" ><i class="fa fa-sort-amount-asc"></i> View All</div></h3></font><br>
			<table class="table table-bordered" style = "width: 82%; font-family: ubuntu;">

						<thead>
							<tr>
								<th>Supplier ID</th>
								<th>Supplier Name</th>
								<th>Address</th>
								<th>Mail</th>
								<th>Phone</th>
								<th>Update</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../dbcon.php');
							$result = mysql_query("SELECT * FROM supplier");
							while($row = mysql_fetch_array($result))
								
								{
									?>

							<tr class="rem1">
								<td class="invert"><?php echo $row['Supplier_ID']; $id = $row['Supplier_ID'];?></td>
								<td class="invert">
									<?php echo $row['Sup_Name']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Sup_Address']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Sup_Mail']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Sup_Phone']; ?>
								</td>

								</td>
									<td class="invert">
										<a href="admin_sup_update.php?id=<?php echo $id; ?>">
										<center><i class="fa fa-edit fa-lg text-success"></i></center>
									</a>
								</td>
								
								<td class="invert">
									
										<div class="snipcart-details10 top_brand_home_details item_add single-item hvr-outline-out">
											
											<input type="submit" name="submit" value="Remove" class="button10" onclick = "window.location.href='sup_delete.php?id=<?php echo $id; ?>'"/></a>
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

