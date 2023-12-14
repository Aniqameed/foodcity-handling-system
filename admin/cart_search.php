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
<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%;">
		<div class="container" style="width: 100%;">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">
	
	
	
			<?php include('sidebar/side_order.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%"><i class="fa fa-list-ol"></i> Search Cart</div></h3></font>
			
			<div class="agileits_search2">

					<form action="cart_search.php" method="post">
					
						<div class="input-group input-group-lg w3_w3layouts" >
						<span class="input-group-addon" id="sizing-addon1"><font color = "black">Order ID</font></span>
						<select class="form-control" placeholder="Product ID" aria-describedby="sizing-addon1" name = "Search" required="" style="float: left; padding-right: 0px;">
							<option></option>
						<?php
						    include('../dbcon.php');
						    $r = mysqli_query($conn,"select * from orders"); 
						    while($row = mysqli_fetch_array($r)){
						         echo '<option>'.$row['Order_ID'].'</option>';
						    }
						?>
						</select>
						</div>
						<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out">
											<div style="padding-left: 60%">
											<input type="submit" name="submit" value="Search" class="button11" /></a>
										</div>
										</div>
										<br>
					</form>
				</div>
				<?php 
				if(isset($_POST['Search'])){?>
				<?php
					$ordid = $_POST['Search'];
					$query = mysqli_query($conn,"select * from cart where Order_ID = '$ordid'")or die(mysqli_error($conn));
					$count1 = mysqli_num_rows($query);

					if ($count1 > 0){ 
						include('../conn.php');
								$query=mysqli_query($conn,"select * from orders where Order_ID = '$ordid'");
								$row=mysqli_fetch_assoc($query);

						?>
						<div style="padding-top: 5%">
						<font face="ubuntu">

				<?php 
				$_SESSION['ordfromcart'] = $ordid;
				$_SESSION['cusfromcart'] = $row['Cus_ID'];
				echo "Order ID : ".$ordid;
				echo "<br>"; 
					echo "Customer ID : ".$row['Cus_ID']; 
					 ?>
				</font></div>
				
					<table class="table table-bordered" style = "width: 82%; font-family: ubuntu;">

						<thead>
							<tr>
								<th>Cart ID</th>
								
								<th>Product ID</th>
								<th>Pro Name</th>

								<th>Image</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody><?php
						include('../dbcon.php');
							$total = 0;
							$result = mysqli_query($conn,"SELECT * FROM cart  where Order_ID = '$ordid'");
							while($row = mysqli_fetch_array($result))
								
								{ $total = $total + $row['Amount'];
						?>
								<tr class="rem1">
								<td class="invert"><?php echo $row['Cart_ID'];?></td>
								<td class="invert">
									<?php echo $row['Product_ID']; ?>
								</td>
								<td class="invert">
									<?php echo $row['Pro_Name']; ?>
								</td>
								<td class="invert">
									<img src="../uploads/<?php echo $row['Imgurl'];?>" alt=" " class="img-responsive" width = "100px" height = "100px" align = "left">
								</td>
								<td class="invert">Rs.<?php echo $row['Price']; ?>.00</td>
								<td class="invert"><?php echo $row['Quantity']; ?></td>
								<td class="invert">Rs.<?php echo $row['Amount']; ?>.00</td>
								
							</tr>

						<?php
				}?>
				<tr>
								<td colspan = "6"><b><font face = "ubuntu" size = 4><div style = "float: right">Total :</div></font></b> </td>
								<td><b><font face = "ubuntu" size = 4>
						Rs.<?php echo $total; ?>.00</b></font></b>
					</td></tr>
				<?php

			}
				else{
					?>
					<SCRIPT>
					alert("Cart Not Found");
					</SCRIPT>
					<?php
				}}
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

