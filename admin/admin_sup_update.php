
<?php 
$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "active";
	$a8 = "";
	$a9 = "";

include('admin_header.php'); ?>
<!DOCTYPE html>

<html>
	<head>
		<title>ADMIN | SUPPLIER </title>
	</head>
	<body>
		
		<div class="ban-top">
<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%;">
		<div class="container" style="width: 100%;">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">
	
	
	
			<?php include('sidebar/side_sup.php'); ?>
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 4%"><i class="fa fa-edit"></i> Update Supplier</div></h3></font><br>
		<?php
			include('../conn.php');
			
			$query=mysqli_query($conn,"select Supplier_ID from supplier order by Supplier_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "SUP0001";
					$valu =$val;
					$_SESSION['supid'] = $valu;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['Supplier_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "SUP".sprintf('%04s',$val);

					$valu = $val;
					$_SESSION['supid'] = $valu;
				}?>
				
			
			<form action="admin_sup_update.php" method="post" enctype="multipart/form-data" name="addproduct">

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Supplier ID</span>
				<select class="form-control" placeholder="Product ID" aria-describedby="sizing-addon1" name = "supid" required="">
					<option></option>
				<?php
				    include('../dbcon.php');
				    $r = mysqli_query($conn,"select * from supplier"); 
				    while($row = mysqli_fetch_array($r)){
				         echo '<option>'.$row['Supplier_ID'].'</option>';
				    }
				?>
				</select>
				</div>
				<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 245px; padding-right: 800px">
											
			<input type="submit" name="find" value = "Find"  class="button11"/></a>
			</div><br>
			</form>
				<?php if(isset($_POST['find'])){ 

					$supid = $_POST['supid'];
						}
					elseif(isset($_GET['id'])){

						$supid = $_GET['id'];
					}
					

					if(isset($_POST['find']) || isset($_GET['id'])){
					$query=mysqli_query($conn,"select * from supplier where Supplier_ID = '$supid'");
					$row=mysqli_fetch_assoc($query);
					?>
					
			<form action="update_supplier.php" method="post" enctype="multipart/form-data" name="addproduct">
					<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Supplier ID</span>
				<input type="text" class="form-control" placeholder="Supplier Name" aria-describedby="sizing-addon1" name = "supid" required="" value="<?php echo $row['Supplier_ID']?>" disabled>
				<?php $_SESSION['supid'] = $supid; ?>
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 20px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Supplier Name</span>
				<input type="text" class="form-control" placeholder="Supplier Name" aria-describedby="sizing-addon1" name = "supname" required="" value="<?php echo $row['Sup_Name']?>">
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 245px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Address</span>
				<input type="text" class="form-control" placeholder="Address" aria-describedby="sizing-addon1" name = "add" required="" value="<?php echo $row['Sup_Address']?>">
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 245px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Mail</span>
				<input type="text" class="form-control" placeholder="Mail" aria-describedby="sizing-addon1" name = "email" required="" value="<?php echo $row['Sup_Mail']?>">
				</div>

				<div class="input-group input-group-lg w3_w3layouts" style="padding-left: 245px; padding-right: 200px;">
				<span class="input-group-addon" id="sizing-addon1">Phone</span>
				<input type="text" class="form-control" placeholder="Phone" aria-describedby="sizing-addon1" onkeypress="return isNumberKey(event)" name = "phone" required="" value="<?php echo $row['Sup_Phone']?>">
				</div>

				
			<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 245px; padding-right: 800px">
											
			<input type="submit" name="save" value = "Update"  class="button11" onclick = "window.location.href='update_supplier.php'"/></a>
			</div></form>
		<?php }?>

		</div></div></div></div></div>

		
		
			
			<SCRIPT language=Javascript>
      
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

