<?php 
$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "";
	$a8 = "active";
	$a9 = "";

include('admin_header.php'); ?>
<!DOCTYPE html>

<html>
	<head>
		<title>ADMIN | STOCK </title>
	</head>
	<body>
		
		<div class="ban-top">
<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%;">
		<div class="container" style="width: 100%;">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">
	
	
	
			<?php include('sidebar/side_stock.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%"><i class="fa  fa-plus-square"></i> Add Category</div></h3></font><br>
		<?php
			include('../conn.php');
		
			$query=mysqli_query($conn,"select Stock_ID from stock order by Stock_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "STK0001";
					$value =$val;
					$_SESSION['stkid'] = $value;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['Stock_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "STK".sprintf('%04s',$val);

					$value = $val;
					$_SESSION['stkid'] = $value;
				}?>
				
			<form action="stock_add.php" method="post">
				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Stock ID</span>
				<input type="text" class="form-control" placeholder="Category ID" aria-describedby="sizing-addon1" name = "stkid" value = "<?php echo $value?>" required="" disabled>
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Supplier ID</span>
				<select class="form-control" placeholder="Supplier ID" aria-describedby="sizing-addon1" name = "supid" required="">
					<option>-- SELECT --</option>
				<?php
				    include('../dbcon.php');
				    $r = mysqli_query($conn,"select * from supplier"); 
				    while($row = mysqli_fetch_array($r)){
				         echo '<option>'.$row['Supplier_ID'].'</option>';
				    }
				?>
				</select>
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Product ID</span>
				<select class="form-control" placeholder="Product ID" aria-describedby="sizing-addon1" name = "proid" required="">
					<option>-- SELECT --</option>
				<?php
				    include('../dbcon.php');
				    $r = mysqli_query($conn,"select * from product"); 
				    while($row = mysqli_fetch_array($r)){
				         echo '<option>'.$row['Product_ID'].'</option>';
				    }
				?>
				</select>
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Quantity</span>
				<input type="text" class="form-control" placeholder="Quantity" aria-describedby="sizing-addon1" name = "quan" onkeypress="return isNumberKey(event)" required="">
				</div>

			<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 250px; padding-right: 800px;">
											
			<input type="submit" value="Save" name="save"  class="button11" onclick = "window.location.href='stock_add.php'"/></a>
			</div>
			</form>

		</div>

	</div></div></div></div>
</body>

<?php include('admin_footer.php'); ?>
</html>

