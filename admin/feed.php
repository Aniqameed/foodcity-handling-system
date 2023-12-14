<?php 
	$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "";
	$a8 = "";
	$a9 = "active";


	
include('admin_header.php'); ?>
<!DOCTYPE html>

<html>
	<head>

		<title>ADMIN | FEEDBACK </title>
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
	

			<?php include('sidebar/side_chat.php'); 
				?>
			<div class="col-sm-9" style = "width: 78%">
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 0%" ><i class="fa fa-comments"></i> Feedback
			<br><br>
					<table class="table table-bordered" style = "width: 100%; font-family: ubuntu; font-size: 17px">

						<thead>
							<tr>
								<th>Feedback ID</th>
								<th>Customer ID</th>
								<th>Product ID</th>
								<th>Message</th>
								<th>Date & Time</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../dbcon.php');
							$result = mysqli_query($conn,"SELECT * FROM feedback");
							while($row = mysqli_fetch_array($result))
								
								{
									?>

							<tr class="rem1">
								<td class="invert"><?php echo $row['F_ID']; $id = $row['F_ID'];?></td>
								<td class="invert">
									<?php echo $row['Cus_ID']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Pro_ID']; ?>
								</td>
								
								<td class="invert"><center>
									<?php echo $row['Message']; ?>
								</td>
								<td class="invert"><center>
									<?php echo "Date : ".$row['F_Date']; ?><br>
									<?php echo "Time : ".$row['F_Time']; ?>
								</td>
								<td class="invert">
									
										<div class="snipcart-details10 top_brand_home_details item_add single-item hvr-outline-out">
											
											<input type="submit" name="submit" value="Delete" class="button10" onclick = "window.location.href='feed_delete.php?id=<?php echo $id; ?>'"/></a>
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
			</div>
</div>
		</div>
		</div>
		</div>
		
</body>

<?php include('admin_footer.php'); ?>
</html>

<!-- <div class="contact agileits">
						<form action="" method="post">
							
							<div class="">
						
								<textarea name="message" required="" style="background: lightgray; width: 75%; height: 100%;">
								
									<span class="badge badge-primary">AFH</span>
								</textarea>
							</div>	
							</div>
							<div class="contact2 agileits">
							<div class="" style="padding-right: 25%">
								<input class="text" type="text" name="subject" placeholder="Message" required="">
							
							
							<input type="submit" value=">" name = "save">
						</div>
							</div>
						</form> -->
				
