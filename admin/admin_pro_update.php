
<?php 
$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "active";
	$a5 = "";
	$a6 = "";
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
	
	
	
			<?php include('sidebar/side_pro.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%"><i class="fa fa-edit"></i> Update Product</div></h3></font><br>
		<?php
			include('../conn.php');
			
			$query=mysqli_query($conn,"select Product_ID from product order by Product_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "PRO0001";
					$valu =$val;
					$_SESSION['proid'] = $valu;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['Product_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "PRO".sprintf('%04s',$val);

					$valu = $val;
					$_SESSION['proid'] = $valu;
				}?>
				
			
			<form action="admin_pro_update.php" method="post" enctype="multipart/form-data" name="addproduct">

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Product ID</span>
				<select class="form-control" placeholder="Product ID" aria-describedby="sizing-addon1" name = "proid" required="">
					<option></option>
				<?php
				    include('../dbcon.php');
				    $r = mysql_query("select * from product"); 
				    while($row = mysql_fetch_array($r)){
				         echo '<option>'.$row['Product_ID'].'</option>';
				    }
				?>
				</select>
				</div>
				<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 245px; padding-right: 800px">
											
			<input type="submit" name="find" value = "Find"  class="button11"/></a>
			</div><br>
			</form>
				<?php if(isset($_POST['find'])){ 

					$proid = $_POST['proid'];
						}
					elseif(isset($_GET['id'])){

						$proid = $_GET['id'];
					}
					

					if(isset($_POST['find']) || isset($_GET['id'])){

						include('../conn.php');
					$query=mysqli_query($conn,"select * from product where Product_ID = '$proid'");
					$row=mysqli_fetch_assoc($query);
					?>
					
			<form action="update_product.php" method="post" enctype="multipart/form-data" name="updateproduct">
					<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Product ID</span>
				<input type="text" class="form-control" placeholder="Product Name" aria-describedby="sizing-addon1" name = "proid" required="" value="<?php echo $row['Product_ID']?>" disabled>
				<?php $_SESSION['proid'] = $proid; ?>
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Product Name</span>
				<input type="text" class="form-control" placeholder="Product Name" aria-describedby="sizing-addon1" name = "proname" required="" value="<?php echo $row['Name']?>">
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 245px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Price</span>
				<input type="text" class="form-control" placeholder="Price" aria-describedby="sizing-addon1" onkeypress="return isNumberKey(event)" name = "proprice" required="" value="<?php echo $row['Price']?>">
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 245px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Description</span>
				<input type="text" class="form-control" placeholder="Description" aria-describedby="sizing-addon1" name = "prodes" required="" value="<?php echo $row['Description']?>">
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 245px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Date</span>
				<input type="date" value="<?php echo $row['Date']; ?>" class="form-control" placeholder="Name" aria-describedby="sizing-addon1" name = "prodate" required="" >
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 245px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Image</span>
				<div class="snipcart-details12 top_brand_home_details item_add single-item hvr-outline-out" style = " padding-right: 300px; ">
											
				<input type="file" name="image" class="file" />
				</div></div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 245px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Category ID</span>
				<select class="form-control" placeholder="Category ID" aria-describedby="sizing-addon1" name = "catid" required="">
					<option><?php echo $row['Cat_ID']?></option>
				<?php
				    include('../dbcon.php');
				    $r = mysql_query("select * from categories"); 
				    while($row = mysql_fetch_array($r)){
				         echo '<option>'.$row['Cat_ID'].'</option>';
				    }
				?>
				</select>
				</div>

				
			</div>
			<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 245px; padding-right: 800px">
											
			<input type="submit" name="save" value = "Update"  class="button11" onclick = "window.location.href='update_product.php"/></a>
			</div></form>
		<?php }?>

		</div></div></div></div></div>

		
		
			
			<SCRIPT language=Javascript>
      <!--
		      function isNumberKey(evt)
		      {
		         var charCode = (evt.which) ? evt.which : event.keyCode
		         if (charCode > 31 && (charCode < 48 || charCode > 57))
		            return false;

		         return true;
		      }
		      //-->
		   </SCRIPT>

</body>

<?php include('admin_footer.php'); ?>
</html>

