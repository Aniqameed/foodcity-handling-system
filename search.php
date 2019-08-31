<?php 
$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "";

include('Guest_Header.php'); ?>
<!DOCTYPE html>
<?php

	include("dbcon.php");
	
	
	
	if(!isset($_POST['catid'])){
			?>
		<SCRIPT>
			window.location = "index.php";
		</SCRIPT>

		<?php
	}
	$catID = $_POST['catid'];



?>

<html>
	<head>
		<title>Foodcity | Search</title>
	</head>
	<body>
		
<div class="ads-grid">
		<div class="container">
				<div class="product-sec1">
						<h3 class="heading-tittle"></h3>
						<?php
							include('connect.php');
							if (!isset($_POST['proname'])) {
							$result = $db->prepare("SELECT * FROM product WHERE Cat_ID = '$catID'");
						}
						elseif($catID == "all"){
							$pro = $_POST['proname'];
							$result = $db->prepare("SELECT * FROM product WHERE Name LIKE '%$pro%'");
								
						}
						else{

							$pro = $_POST['proname'];
							$result = $db->prepare("SELECT * FROM product WHERE Name LIKE '%$pro%' AND Cat_ID LIKE '%$catID%'");
								
							
						}
						$result->execute();
						$count = $result->rowCount();
						if($count == 0){
								echo "<br><br><font face = 'ubuntu' color = 'red'><h2><center>No Results Found</center></h2></font><br><br>";
						}else{
					for($i=0; $row = $result->fetch(); $i++){
								
						?>	
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="uploads/<?php echo $row['Imgurl'];?>" width = "150" height = "140" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.php?id=<?php echo $row['Product_ID']; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.php?id=<?php echo $row['Product_ID']; ?>"><?php echo $row['Name']; ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">Rs.<?php echo $row['Price']; ?>.00</span>
										<del>Rs.<?php echo $row['Price']+100; ?>.00</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
								<form action="add_cart.php?id=<?php echo $row['Product_ID']; ?>" method="post">
										<?php						
											if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ 

											$href = "<a href='' data-toggle='modal' data-target='#myModal1'>";
											echo $href;	
											?>
											<input type="submit" name="button" value="Add to cart" class="button" />
										</a>
											<?php
														}
														else{?>
															
														<input type="submit" name="submit" value="Add to cart" class="button" onclick="window.location.href = 'add_cart.php?id=<?php echo $row['Product_ID']; ?>'" />
															<?php
														}?>
														
											
									</form>
								</div>
							</div>
						</div>
					</div>

					<?php }}?>
						
						<div class="clearfix"></div>
					</div></div></div>
	<?php include('Guest_Footer.php'); ?>
	</body>
</html>
s