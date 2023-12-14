<?php 
$a1 = "";
	$a2 = "";
	$a3 = "active";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "";
	$a8 = "";
	$a9 = "";

include('admin_header.php'); ?>
<!DOCTYPE html>

<html>
	<head>
		<title>ADMIN | CATEGORY </title>
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
	

			<?php include('sidebar/side_cat.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%" ><i class="fa fa-sort-amount-asc"></i> View All</div></h3></font><br>
			<table class="table table-bordered" style = "width: 82%; font-family: ubuntu;">

						<thead>
							<tr>
								<th>Category ID</th>
								<th>Category Name</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../dbcon.php');
							$result = mysqli_query($conn,"SELECT * FROM categories");
							while($row = mysqli_fetch_array($result))
								
								{
									?>

							<tr class="rem1">
								<td class="invert"><?php echo $row['Cat_ID']; $id = $row['Cat_ID'];?></td>
								<td class="invert">
									<?php echo $row['Cat_Name']; ?>
								</td>
								
								<td class="invert">
									
										<div class="snipcart-details10 top_brand_home_details item_add single-item hvr-outline-out" >
											
											<input type="submit" name="submit" value="Remove" class="button10" onclick = "window.location.href='Cat_delete.php?id=<?php echo $id; ?>'"/></a>
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
</div></div></div></div></div></div>
			
			
</body>

<?php include('admin_footer.php'); ?>
</html>

