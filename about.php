<?php 
$a1 = "";
	$a2 = "";
	$a3 = "active";
	$a4 = "";
	$a5 = "";
	$a6 = "";
	$a7 = "";

include('Guest_Header.php'); ?>
<!DOCTYPE html>
<?php
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
		 <title>Foodcity | About Us </title>
	</head>
	<body>
		
	<div class="page-head_agile_info_w3l">

	</div>
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="welcome">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Welcome to our Site
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="w3l-welcome-info">
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="w3l-welcome-text">
				<p>This system will be used for various purposes under the Food City. For example – It will be used to the online ordering purpose, searching of products in requested amount as per user requirements. Tracking of orders from the purchasers.</p><p>
This Supermarket Management System is web application, it is help to particular supermarket.  It is maintaining to supermarket’s all information. That informations are managing by admins only. It will help to minimize the duplication of data and it makes the processing of data very easy without waste of time. The supermarket details are provided in database proper management. Modern techniques are used to minimize the errors in the system. </p>
				</p>
				
			</div>
		</div>
	</div>
	<h3 class="tittle-w3l">C.E.O
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
	<div class="w3l-welcome-info" style="padding-left: 35%">
				
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img" >
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src="images/aniqa.jpg" class="img-responsive zoom-img" style="float: center" alt="" >
					</div>
				</div>
				<div class="clearfix"> </div>
			</div><br><br>
	<!-- //welcome -->
	<!-- video -->
	<div class="about">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Video
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="about-tp">
				<div class="col-md-8 about-agileits-w3layouts-left">
					<iframe src="https://player.vimeo.com/video/15520702?color=ffffff&title=0&byline=0"></iframe>
				</div>
				<div class="col-md-4 about-agileits-w3layouts-right">
					<div class="img-video-about">
						<img src="images/videoimg2.png" alt="">
					</div>
					<h4>Grocery Shoppy</h4>
					<p>No.1 Leading E-commerce marketplace with over 70 million Products</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php include('Guest_Footer.php'); ?>
	</body>
</html>
