<?php 
    $a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "active";
	$a6 = "";
	$a7 = "";

include('Guest_Header.php'); ?>
<!DOCTYPE html>


<html>
	<head>
		<title>Foodcity | Feedbacks </title>
	</head>
	<body>
	<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%">
		<div class="container" style="width: 60%; ">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">
	
		<center><font face = "ubuntu" color = "green"><h3><div style = "float: center; font-size: 40px" >Latest Feedbacks</center></div>
			<br><br></h3></font>
				<?php
					include('connect.php');
					$result = $db->prepare("SELECT * FROM feedback INNER JOIN customer ON feedback.Cus_ID = customer.Customer_ID INNER JOIN product ON feedback.Pro_ID = product.Product_ID ORDER BY F_ID DESC");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
						?>	
							<div class="ban-top" ><br>
						<div style="padding-left: 5%">
						<table>
							<tr>
						<td rowspan="3"><img src = "images/photo.png" width = 70 height=70></td>

						<td><b>&nbsp &nbsp <?php echo $row['Cus_Name']; $id = $row['Pro_ID']; ?></b></td>
						<?php if(strlen($row["Message"]) > 40){}else{ ?>
						<td>&nbsp &nbsp </td>
						<td>&nbsp &nbsp </td>
						<td>&nbsp &nbsp </td>
						<td>&nbsp &nbsp </td>

					<?php }?>

						<td rowspan="6"><img src = "Uploads/<?php echo $row['Imgurl'];?>" width = 150 height=150></td>
					</tr>

					<tr>
						<td>&nbsp &nbsp 
						<font color="gray" size = 2><?php echo $row['Cus_Mail']; ?></font><br></td></tr>
						<tr>
						<td>&nbsp &nbsp 
						<font color="gray" size = 2><?php 
							$date = date("Y-m-d");
							if($date == $row['F_Date']){
								echo "Today &nbsp &nbsp ".$row['F_Time'];
							}else{
								echo $row['F_Date']." &nbsp &nbsp ".$row['F_Time'];
							}
							?></font><br></td></tr>
						<tr>
						<tr>
							<td></td>
						<td><br>&nbsp &nbsp <?php echo "<b>Product : </b>".$row['Name']; ?></td>

					</tr>
					<tr>
						<td></td>
					<td><br>&nbsp &nbsp <?php echo "<b>Feedback : </b>"; ?></td>
					</tr>
					<tr>
						<td></td>
					<td>&nbsp &nbsp <?php echo substr($row["Message"],0,40)."<br>&nbsp &nbsp ".substr($row["Message"],40,40)."<br>&nbsp &nbsp ".substr($row["Message"],80,20)."<br>&nbsp &nbsp ".substr($row["Message"],100,40); ?></td>
					
					<td><br> &nbsp &nbsp 	<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<a href = "single.php?id=<?php echo $id; ?>"  class="btn btn-primary  btn-xs"><font size = 4>View Product </font></a></td>
					</tr>
					</table>
					<br>
				</div>
				</div>
					<?php }?>
				
		
	</div></div></div></div></div>



</body><br>
	<?php include('Guest_Footer.php'); ?>
	</body>
</html>

