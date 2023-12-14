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
<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%;">
		<div class="container" style="width: 100%;">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">
	
	
	
			<?php include('sidebar/side_cat.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%"><i class="fa  fa-plus-square"></i> Add Category</div></h3></font><br>
		<?php
			include('../conn.php');
		
			$query=mysqli_query($conn,"select Cat_ID from categories order by Cat_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "CAT0001";
					$value =$val;
					$_SESSION['catid'] = $value;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['Cat_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "CAT".sprintf('%04s',$val);

					$value = $val;
					$_SESSION['catid'] = $value;
				}?>
				
			<form action="Cat_add.php" method="post">
				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Category ID</span>
				<input type="text" class="form-control" placeholder="Category ID" aria-describedby="sizing-addon1" name = "catid" value = "<?php echo $value?>" required="" disabled>
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Category Name</span>
				<input type="text" class="form-control" placeholder="Name" aria-describedby="sizing-addon1" name = "name" required="">
				</div>

			<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 250px; padding-right: 800px;">
											
			<input type="submit" value="Save" name="save"  class="button11" onclick = "window.location.href='Cat_add.php'"/></a>
			</div>
			</form>

		</div>

	</div></div></div></div>
</body>

<?php include('admin_footer.php'); ?>
</html>

