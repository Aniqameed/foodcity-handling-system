<?php 
$a1 = "";
	$a2 = "active";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "";

include('Guest_Header.php'); ?>
<!DOCTYPE html>
<?php
$_SESSION['type'] = "cat";
	include("dbcon.php");
	
	$prodID = $_GET['id'];
	$_SESSION['ca'] = $prodID;

	if (!isset($prodID) ||(trim ($prodID) == '')){
		?>
		<SCRIPT>
			window.location = "index.php";
		</SCRIPT>

		<?php
	}

		else{
		$sqlSelectSpecProd = mysqli_query($conn,"select * from categories where Cat_ID = '$prodID'") or die(mysqli_error($conn));

		$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);
	
		$catname = $getProdInfo["Cat_Name"];
		
				

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
		<title>Foodcity | Categories </title>
	</head>
	<body>
		
<div class="ads-grid">
		<div class="container">
				<div class="product-sec1">
						<h3 class="heading-tittle"><?php echo $catname; ?></h3>
						<?php
							include('connect.php');
							$result = $db->prepare("SELECT * FROM product WHERE Cat_ID = '$prodID'");
							$result->execute();
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

					<?php }?>
						
						<div class="clearfix"></div>
					</div></div></div>
	<?php include('Guest_Footer.php'); ?>
	</body>
</html>
<?php } ?>