<?php 
	$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "active";
	$a6 = "";
	$a7 = "";
	$a8 = "";
	$a9 = "";

include('admin_header.php'); ?>
<!DOCTYPE html>

<html>
	<head>
		<title>ADMIN | ORDER </title>
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
	

			<?php include('sidebar/side_order.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%" ><i class="fa fa-sort-amount-asc"></i> View All
				<?php 
				if ($count5 == 0){
					echo "<span class='badge badge-info'>All Are Delivered</span>"; 
				}else{
				echo "<span class='badge badge-danger'>".$count5." Not Delivered</span>"; 
				} ?>
			</div></h3></font><br>
			<table class="table table-bordered" style = "width: 82%; font-family: ubuntu;">

						<thead>
							<tr>
								<th>Order ID</th>
								<th>Customer ID</th>
								<th>Amount</th>
								<th>Date</th>

								<th><center>Status</center></th>

								<th>Deliver</th>
							
							</tr>
						</thead>
						<tbody>
						<?php
							include('../dbcon.php');
							$result = mysqli_query($conn,"SELECT * FROM orders");
							while($row = mysqli_fetch_array($result))
								
								{
									?>

							<tr class="rem1">
								<td class="invert"><?php echo $row['Order_ID']; $id = $row['Order_ID'];?></td>
								<td class="invert">
									<?php echo $row['Cus_ID']; ?>
								</td>
								<td class="invert">
									Rs.<?php echo $row['Amount']; ?>.00
								</td>
								<td class="invert"><?php echo $row['Date']; ?></td>
								<td class="invert"><center>
									<?php
										if($row['Status'] == 'Not Delivered'){?>
											<span class="badge  badge-danger">Not Delivered</span>
											<?php
										}else{
											?>
											<span class="badge badge-green">Delivered</span><br>
											<?php
											echo "Delivery Date : ".$row['D_Date']."<br>";
											echo "Delivery Time : ".$row['D_Time'];
										}
									?>
									</center>
								</td>
								<td class="invert">
									<?php 
									if ($row['Status'] == "Not Delivered"){
									?>
										<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" >
											
											<input type="submit" name="submit" value="Deliver" class="button11"  onclick = "window.location.href='ord_deliver.php?id=<?php echo $id; ?>'"/></a>
										</div>
										 <?php }else{
										 	?>
										 	<center><i class="fa  fa-check-square-o"></i></center>
										 <?php }?>
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
			</div>
</div>
		</div>
		
</body>

<?php include('admin_footer.php'); ?>
</html>

