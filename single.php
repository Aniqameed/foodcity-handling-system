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
$_SESSION['type'] = "sin";
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

	include("dbcon.php");
	
	$prodID = $_GET['id'];
	$_SESSION['pr'] = $prodID;

	if (!isset($prodID) ||(trim ($prodID) == '')){
		?>
		<SCRIPT>
			window.location = "index.php";
		</SCRIPT>

		<?php
	}

		else{
									
		$sqlSelectSpecProd = mysqli_query($conn,"select * from product where Product_ID = '$prodID'") or die(mysqli_error($conn));

		$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);
		$id= $getProdInfo["Product_ID"];
		$name= $getProdInfo["Name"];
		$price = $getProdInfo["Price"];
		$des = $getProdInfo["Description"];
		$cat = $getProdInfo["Cat_ID"];
		$prodimage = $getProdInfo["Imgurl"];

		$sqlSelectSpecProd = mysqli_query($conn,"select * from categories where Cat_ID = '$cat'") or die(mysqli_error($conn));

		$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);

		$catname = $getProdInfo["Cat_Name"];
			

?>


<html>
	<head>
		<title>Foodcity | Single Product </title>
	</head>
	<body>
		
<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Single Page
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="uploads/<?php echo $prodimage;?>">
								<div class="thumb-image">
									<img src="uploads/<?php echo $prodimage;?>" data-imagezoom="true" class="img-responsive" width = "160" height = "150" alt="" > </div>
							</li>
							
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3><?php echo $name;?></h3>
				
				<p>
					<span class="item_price">Rs.<?php echo $price;?>.00</span>
					
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Shipping Speed to Delivery.
						</li>
						<li>
							Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
						</li>
					
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>Category :
					
						<?php echo $catname;?>
					</p>
				</div>
				<div class="product-single-w3l">
					<br><p><b>Description :
					
						<?php echo $des;?>
					</p>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						
									<form action="add_cart.php?id=<?php echo $id; ?>" method="post">
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
														</b>
											
									</form>
								
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>


		<div class="ads-grid" style="padding-top: 2%; padding-bottom: 2%">
		<div class="container" style="width: 100%; ">
			<div class="product-sec1">
	<div class="checkout-right">
	<div class="table-responsive">

		<?php if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ }else{
				?>
		<div class="contact agileits" style="padding-left: 10%; padding-right: 30%">
			
			
						<form action="add_feed.php" method="post">
						
							<div class="">
								<textarea placeholder="Add Your Feedback" name="message" required=""></textarea>
							</div>
							<input type="submit" value="Submit" name = "save">
						</form>
			

	</div><?php } ?>
	
		<center><font face = "ubuntu" color = "green"><h3><div style = "float: center; font-size: 30px" >Latest Feedbacks <?php echo "(".$name.")" ?></center></div>
			<br><br></h3></font>


				<?php
					include('connect.php');
					$result = $db->prepare("SELECT * FROM feedback INNER JOIN customer ON feedback.Cus_ID = customer.Customer_ID INNER JOIN product ON feedback.Pro_ID = product.Product_ID WHERE Pro_ID = '$id' ORDER BY F_ID DESC");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
						?>	
							<div class="ban-top" ><br>
						<div style="padding-left: 5%">
						<table>
							<tr>
						<td rowspan="3"><img src = "images/photo.png" width = 70 height=70></td>

						<td><b>&nbsp &nbsp <?php echo $row['Cus_Name']; $id = $row['Pro_ID']; ?></b></td>
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
					
					</table>
					<br>
				</div>
				</div>
					<?php }?>
				
	
	</div></div></div></div></div>
	<!-- //Single Page -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Add More <?php echo"($catname)"; ?>
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<?php
							include('connect.php');
							$result = $db->prepare("SELECT * FROM product WHERE Cat_ID = '$cat' ORDER BY Product_ID DESC");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
								
						?>	
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.php?id=<?php echo $row['Product_ID']; ?>">
									<img src="uploads/<?php echo $row['Imgurl'];?>" width = "150" height = "140" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.php?id=<?php echo $row['Product_ID']; ?>"><?php echo $row['Name']; ?></a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>Rs.<?php echo $row['Price']; ?>.00</h6>
									<p>Save Rs.40.00</p>
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
					</li>
					<?php }?>
				</ul>
			</div>
	</div>
</div>

	<?php include('Guest_Footer.php'); ?>
	</body>
</html>
<?php } ?>