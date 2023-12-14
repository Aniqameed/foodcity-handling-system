<?php 
$a1 = "";
	$a2 = "active";
	$a3 = "";
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
		<title>ADMIN | CUSTOMER </title>
	</head>
	<body>
	
		<div class="ban-top">
<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%;">
		<div class="container" style="width: 100%;">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">
	
	
	
			<?php include('sidebar/side_cus.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%"><i class="fa fa-search"></i> Search</div></h3></font>
			
			<div class="agileits_search2">

					<form action="#" method="post">
					
						<input name="Search" type="search" placeholder="Search By ID" required="" size = "5">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					
					</form>

				</div>
				<?php 
				if(isset($_POST['Search'])){
					$cusid = $_POST['Search'];
					$query = mysqli_query($conn,"select * from customer where Customer_ID = '$cusid'")or die(mysqli_error($conn));
					$count1 = mysqli_num_rows($query);

					if ($count1 > 0){ 
						include('../conn.php');
								$query=mysqli_query($conn,"select * from customer where Customer_ID = '$cusid'");
								$row=mysqli_fetch_assoc($query);
						?>
						<div style = "padding-left: 20%; padding-top: 5%">
						<font face = "ubuntu" size="5" color = green><b>Result</b></font><br>
						<font face = "ubuntu" size="4">
						<table style = "font-family: ubuntu; font-size: 18px;">
						<tr><td>Customer ID</td><td> : </td><td> <?php echo $row['Customer_ID'];?> </td></tr>
						<tr><td>Customer Name</td><td> : </td><td> <?php echo $row['Cus_Name'];?> </td></tr>
						<tr><td>Customer Address</td><td> : </td><td> <?php echo $row['Cus_Address'];?> </td></tr>
						<tr><td>Customer Phone</td><td> : </td><td> <?php echo $row['Cus_Phone'];?> </td></tr>
						<tr><td>Customer Mail</td><td> : </td><td> <?php echo $row['Cus_Mail'];?> </td></tr>
					</table>
					</font></div>
						<?php
				}
				else{
					?>
					<SCRIPT>
					alert("Customer Not Found");
					</SCRIPT>
					<?php
				}}
				?>
			</div>	
	</div></div></div></div>
</body>

<?php include('admin_footer.php'); ?>
</html>

