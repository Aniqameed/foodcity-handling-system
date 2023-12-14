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
	<br><br><br>
	<div style="padding-bottom: 50px; padding-left: 300px ">
	<div class="col-sm-9 padding-right" >
					<div class="alert alert-success" >
					   <h3 class="text-center" ><i class="fa fa-check-circle fa-lg"></i> Your order has been submitted! Thank you for Shopping!</h3>
                    </div>
				
				

					<div class="checkout-left">
				<div class="address_form_agile">
					
					
					<div class="checkout-right-basket">
						<a href="index.php" style = "float: right"><font face = "ubuntu">Add More</font>
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>
				</div></div></div>
				<div class="clearfix"> </div>
			</div>
				<br><br>
	</body>
</html>
<?php } ?>
<?php include('Guest_Footer.php'); ?>
