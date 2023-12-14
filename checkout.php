<?php 
	$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "active";
	$a5 = "";
	$a6 = "";
	$a7 = "";
include('Guest_Header.php'); ?>


<!DOCTYPE html>



<?php
$_SESSION['type'] = "check";
 $total = 0;
include('dbcon.php');
						if (!isset($_SESSION['cusid']) ||(trim ($_SESSION['cusid']) == '')){ 
										$count = 0;
									}
									else{

							
							$cus = $_SESSION['cusid'];
							$count = 0;
							include('conn.php');
			$query=mysqli_query($conn,"select Order_ID from orders order by Order_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "ORD0001";
					$valu =$val;
					$_SESSION['ord'] = $valu;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['Order_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "ORD".sprintf('%04s',$val);

					$valu = $val;
					$_SESSION['ord'] = $valu;
					
				}
							$result = mysqli_query($conn,"SELECT * FROM cart where Order_ID = '$valu' AND Cus_ID = '$cus'");
							while($row = mysqli_fetch_array($result))
								
								{
									$count++;
								}
}
?>
<html>
	<head>
		<title>Foodcity | Checkout </title>
	</head>
	<body>
		
	<?php
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ 
				?>
			<script>
			
 

			</script>
 		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>

						
							<font color = '#1e90ff'>
							Sign In now, Let's start your Food Shopping. Don't have an account?
							</font>
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="login_script_checkout.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Mail" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In" name="login">

						</form>
						
				
					</div>
				 
			</div>
		</div>
	</div>

				<?php	

					}
									else{
						?>
		<!-- checkout page -->
	<div class="page-head_agile_info_w3l_02">

	</div>
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				
				<div class="table-responsive" style = "width: 100%">
			<?php
			include('dbcon.php');
			$cus = $_SESSION['cusid'];
			include('conn.php');
		$query=mysqli_query($conn,"select Order_ID from orders order by Order_ID desc limit 1");

			if (mysqli_num_rows($query) == 0){
				$val = "ORD0001";
				$valu =$val;
				$_SESSION['ord'] = $valu;
			}
			else{
				$row=mysqli_fetch_array($query);
				
				$val = $row['Order_ID'];
				$val = substr($val, 3, 5);

				$val = (int) $val +1;
				$val = "ORD".sprintf('%04s',$val);

				$valu = $val;
				$_SESSION['ord'] = $valu;
				
			}
			$query = mysqli_query($conn,"SELECT * FROM cart where Order_ID = '$valu' AND Cus_ID = '$cus'");
			$count = mysqli_num_rows($query);

			if ($count > 0){ ?>
					<table class="timetable_sub">
						<thead>
							
							<tr>
								<th><font face = "ubuntu" size = 4>SL No.</font></th>
								<th><font face = "ubuntu" size = 4>Product</font></th>
								
								<th><font face = "ubuntu" size = 4>Product Name</font></th>

								<th><font face = "ubuntu" size = 4>Price</font></th>

								<th><font face = "ubuntu" size = 4>Quantity</font></th>
								<th><font face = "ubuntu" size = 4>Total Amount</font></th>
								<th><font face = "ubuntu" size = 4>Remove</font></th>

							</tr>
						</thead>
						<tbody>
							<?php
							include('dbcon.php');
							$no = 1;
							$cus = $_SESSION['cusid'];
							$result = mysqli_query($conn,"SELECT * FROM cart where Order_ID = '$valu' AND Cus_ID = '$cus'");
							while($row = mysqli_fetch_array($result))
								
								{	
									$_SESSION['Prid'] = $row['Product_ID'];
								?>
							<tr class="rem1">
								<td class="invert"><font face = "ubuntu" size = 4><?php echo $no?></font></td>
								<td class="invert-image">
									
										<img src="uploads/<?php echo $row['Imgurl'];?>" alt=" " class="img-responsive">
								
								</td>
							
								<td class="invert"><font face = "ubuntu" size = 4><?php echo $row['Pro_Name'];?></font></td>
								<td class="invert"><font face = "ubuntu" size = 4>Rs.<?php echo $row['Price'];?>.00</font></td>
								
								
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
										
											<a href = "min1.php?id=<?php echo $row['Product_ID'];?>">
											<div class="entry value-minus">
											
											</div></a>
											<div class="entry value">
												<span><font face = "ubuntu" size = 4><?php echo $row['Quantity'];?></font></span>
											</div>
											<a href = "plus1.php?id=<?php echo $row['Product_ID'];?>">
											<div class="entry value-plus active">
												
											</div></a>
										</div>
									</div>
								</td>
								<td class="invert"><font face = "ubuntu" size = 4>Rs.<?php echo $row['Amount'];?>.00</font></td>
								<td class="invert">
									
										<div class="snipcart-details10 top_brand_home_details item_add single-item hvr-outline-out">
											<font face = "ubuntu" size = 4>
											<input type="submit" name="submit" value="Remove" class="button10" onclick = "window.location.href='Cart_delete1.php?id=<?php echo $row['Product_ID']; ?>'"/></a></font>
										</div>
									</div>
								</td>
							</tr>
							
						<?php $no++; }?>

						<?php 
							$result = mysqli_query($conn,"SELECT * FROM cart where Order_ID = '$valu' AND Cus_ID = '$cus'");
							while($row = mysqli_fetch_array($result))
								{
									$total = $total + $row['Amount'];

								}
								$_SESSION['total'] = $total;
								?>
							<tr>
								<td colspan = "5"><b><font face = "ubuntu" size = 4><div style = "float: right">Total :</div></font></b> </td>
								<td><b><font face = "ubuntu" size = 4>
						Rs.<?php echo $total; ?>.00</b></font></b>
					</td></tr>
						</tbody>
					</table>
				
				</div>
			</div>



			<div class="checkout-left">
				<div class="address_form_agile">
					<div class="snipcart-details10 top_brand_home_details item_add single-item hvr-outline-out">
						<div style="float: right">
					<input type="submit" name="submit" value="Clear All Products" class="button10" onclick = "window.location.href='clearall.php'"/></div>
					</div><br><br>
					<div class="checkout-right-basket">
						<a href="add_order.php" style = "float: right"><font face = "ubuntu">Delivery to My Address</font>
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		<?php }
					else{
						echo "<font face = 'ubuntu' color = 'red'><h2><center>You Didn't Select product</center></h2></font><br><br></div></div></div></div>";
					}?>
					<?php
					if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){}else{ 
				?>
	<font face = "ubuntu" color = "blue"><h3><div style ="" ><center><i class="fa fa-sort-amount-asc"></i> Your Order Details</center>
				
			</div></h3></font><br>
			<table class="table table-bordered" align="center" style = "width: 82%; font-family: ubuntu;">

						<thead>
							<tr>
								<th>Order ID</th>
								
								<th>Amount</th>
								<th>Date</th>

								<th><center>Status</center></th>

								
							
							</tr>
						</thead>
						<tbody>
						<?php
							include('dbcon.php');
							$result = mysqli_query($conn,"SELECT * FROM orders where cus_ID = '$cus'");
							while($row = mysqli_fetch_array($result))
								
								{
									?>

							<tr class="rem1">
								<td class="invert"><?php echo $row['Order_ID']; $id = $row['Order_ID'];?></td>
								
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
								
							</tr>

							<?php }
							?> 
							
						</tbody>
					</table>
				<?php }?>
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Add More
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<?php
							include('connect.php');
							$result = $db->prepare("SELECT * FROM product ORDER BY Product_ID DESC");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
								
						?>	
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.php?id=<?php echo $row['Product_ID']; ?>">
									<img src="uploads/<?php echo $row['Imgurl'];?>" width = "150" height = "140" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.php?id=<?php echo $row['Product_ID']; ?>"><?php echo $row['Name']; ?></a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>Rs.<?php echo $row['Price']; ?>.00</h6>
									<p>Save Rs.40.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="add_cart.php?id=<?php echo $row['Product_ID'];?>" method="post">
											<input type="submit" name="submit" value="Add to cart" class="button" />
									</form>
								</div>
							</div>
						</div>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
	</body>
</html>
<?php } ?>
<?php include('Guest_Footer.php'); ?>
