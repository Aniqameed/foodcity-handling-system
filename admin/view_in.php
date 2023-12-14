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

	

include('admin_header.php'); 
	
?>
<!DOCTYPE html>

<html>
	<head>
		<title>ADMIN | CHAT </title>
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
	

			<?php include('sidebar/side_chat.php'); ?>
			<div class="col-sm-9" style = "width: 72%">
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 0%" ><i class="fa fa-envelope fa-lg"></i> View Message </font>
				

						

					
					</div>
					<div style="padding-top : 3%">
						<font face = "ubuntu" size="4">
					<?php
				if(isset($_GET['id'])){
					$chtid = $_GET['id'];
					include('../dbcon.php');
								$query=mysqli_query($conn,"select * from chat where Chat_ID = '$chtid'");
								$row=mysqli_fetch_array($query);

								echo "<b>Chat ID : </b>".$row['Chat_ID'];
								echo "<br><b>Name : </b>".$row['Name'];
								echo "<br><b>Subject : </b>".$row['Subject'];
								echo "<br><b>Mail : </b>".$row['Mail'];
								echo "<br><b>Message : </b>".$row['Message'];
								echo "<br><b>Date : </b>".$row['Date'];
								echo "<br><b>Time : </b>".$row['Time'];

								
  								mysqli_query($conn,"UPDATE chat SET To_Status='Read' WHERE Chat_ID = '$chtid'");
				}
				?>
			</font>
			<div class="col-sm-9" style="float: right;">
			<div class="snipcart-details11 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 250px; padding-right: 30%;">
											
			<input type="submit" value="Back" name="save"  class="button11" onclick = "window.location.href='admin_chat.php'"/></a>


			</div><br>

			<div class="snipcart-details10 top_brand_home_details item_add single-item hvr-outline-out" style = "padding-left: 250px; padding-right: 30%;">
											
			<input type="submit" value="Delete" name="save"  class="button10" onclick = "window.location.href='admin_in_del.php?id=<?php echo $row['Chat_ID'];?>'"/></a>

			
			</div>
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

