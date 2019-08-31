
<?php 
$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "active";
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
	
	
	
			
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%"><i class="fa  fa-plus-square"></i> Add Admin</div></h3></font><br>
		
				
			
			<form action="admin_add.php" method="post" enctype="multipart/form-data" name="addproduct">

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Admin Name</span>
				<input type="text" class="form-control" placeholder="Admin Name" aria-describedby="sizing-addon1" name = "uname"  required="" >
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Password</span>
				<input type="password" class="form-control" placeholder="Password" id = "password1" aria-describedby="sizing-addon1" name = "password1" required="">
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Confirm Password</span>
				<input type="password" class="form-control" placeholder="Confirm Password" aria-describedby="sizing-addon1" name = "password2" id = "password2" required="">
				</div>

				
			</div>
			<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 20px; padding-right: 1000px">
											
			<input type="submit" name="save" value = "Save"  class="button11"/></a>
			</div></form></div></div></div></div></div>

		
		
			
			

</body>

<?php include('admin_footer.php'); ?>
</html>

