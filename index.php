
<?php 
$a1 = "active";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "";
include('Guest_Header.php'); ?>
<!DOCTYPE html>



<?php
include('dbcon.php');
$_SESSION['type'] = "index";
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
		<title>Foodcity | Home </title>
	</head>
	<body>
		
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="product.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="product.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						<a class="button2" href="product.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="product.php">Shop Now </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Top Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="search.php" method="post">
						<select style="width: 100%;
					   	 padding: 1em 1em 1em 1em;
					    font-size: 0.8em;
					    margin: 0.5em 0;
					    outline: none;
					    color: #212121;
					    border: none;
					    border: 1px solid #ccc;
					    letter-spacing: 1px;
					    text-align: left;
					    font-family: 'ubuntu';" name = "catid">
							<option value = "all">All Category</option>
							<?php
							    include('dbcon.php');
							    $r = mysqli_query($conn,"select * from categories"); 
							    while($row = mysqli_fetch_array($r)){
							         echo '<option value = '.$row['Cat_ID'].'>'.$row['Cat_Name'].'</option>';
							    }
							?>
						</select>
						<input type="search" placeholder="Product name..." name="proname" >
						<input type="submit" value=" ">
					</form>
				</div>
				<!-- price range -->
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>

							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				<!-- //price range -->
				<!-- food preference -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Food Preference</h3>
					<ul>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Vegetarian</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Non-Vegetarian</span>
						</li>
					</ul>
				</div>
				<!-- //food preference -->
				<!-- discounts -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Discount</h3>
					<ul>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">5% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">10% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">20% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">30% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">50% or More</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">60% or More</span>
						</li>
					</ul>
				</div>
				<!-- //discounts -->
				<!-- reviews -->
				<div class="customer-rev left-side">
					<h3 class="agileits-sear-head">Customer Review</h3>
					<ul>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<span>5.0</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>4.0</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>3.5</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>3.0</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>2.5</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //reviews -->
				<!-- cuisine -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Cuisine</h3>
					<ul>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">South American</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">French</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Greek</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Chinese</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Japanese</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Italian</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Mexican</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Thai</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span">Indian</span>
						</li>
						<li>
							<input type="checkbox" class="checked">
							<span class="span"> Spanish </span>
						</li>
					</ul>
				</div>
				<!-- //cuisine -->
				<!-- deals -->
				<div class="deal-leftmk left-side">
					<h3 class="agileits-sear-head">Special Deals</h3>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d2.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Lay's Potato Chips</h3>
							<a href="single.html">Rs.18.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d1.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Bingo Mad Angles</h3>
							<a href="single.html">Rs.9.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d4.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Tata Salt</h3>
							<a href="single.html">Rs.15.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d5.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Gujarat Dry Fruit</h3>
							<a href="single.html">Rs.525.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="images/d3.jpg" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Cadbury Dairy Milk</h3>
							<a href="single.html">Rs.149.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //deals -->
			</div>
			<!-- //product left -->
			<!-- product right -->
			
			
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Nuts</h3>
						<?php
							include('connect.php');
							$result = $db->prepare("SELECT * FROM product WHERE Cat_ID = 'CAT0006' ORDER BY Product_ID DESC");
							$result->execute();
							for($i=0; $i<3; $i++){
								$row = $result->fetch();
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
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Pure Energy</h3>
							<h6>Enjoy our all healthy Products</h6>
							<p>Get Extra 10% Off</p>
						</div>
						<h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					
					<div class="product-sec1">
						<h3 class="heading-tittle">Oils</h3>
						<?php
							include('connect.php');
							$result = $db->prepare("SELECT * FROM product WHERE Cat_ID = 'CAT0007' ORDER BY Product_ID DESC");
							$result->execute();
							for($i=0; $i<3; $i++){
								$row = $result->fetch();
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
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Pasta & Noodles</h3>
						<?php
							include('connect.php');
							$result = $db->prepare("SELECT * FROM product WHERE Cat_ID = 'CAT0008' ORDER BY Product_ID DESC");
							$result->execute();
							for($i=0; $i<3; $i++){
								$row = $result->fetch();
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
										</form>
									</div>

								</div>
							</div>
						</div>
						<?php } ?>
						
						<div class="clearfix"></div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Latest Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<?php
							include('connect.php');
							$result = $db->prepare("SELECT * FROM product ORDER BY Product_ID DESC");
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