<?php 
	session_start();
	if (!isset($_SESSION['id1']) ||(trim ($_SESSION['id1']) == '')){ ?>
			<script>
	
				window.location = "admin-login.php";
				
	
			</script>
			<?php
			} 

			else{
				$count2=0;
				$count5=0;

	include('./../dbcon.php');
							$result = mysqli_query($conn,"SELECT * FROM chat WHERE To_Status = 'Not Read'");
							while($row = mysqli_fetch_array($result))
								
								{

									 $count2++;
								}

							$result10 = mysqli_query($conn,"SELECT * FROM orders WHERE Status = 'Not Delivered'");
							while($row = mysqli_fetch_array($result10))
								
								{

									 $count5++;
								}
				?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">
	
	<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui1.css">

	
</head>

<body>
	
	<div class="header-most-top" style = "padding-bottom: 10px">
		
		<p>ADMIN PAGE</p>
	</div>
	<div class="ban-top" >
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.php">
						
						<font face = "Ubuntu">
							<img src = "./../images/admin.png" width = 80 height = 80 >
						<span>ADMIN</span>
					</font>
					</a>
				</h1>
			</div>
		
			<div class="col-md-8 header">
			
				<ul>
					
					<b>
					
					
							
							<li style = "float: right">
							<a href="logout.php">
								<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Out </a>
							</li>
							<li style = "float: right">
							<a href="#">
								<span  aria-hidden="true"></span></a>
							</li>
							<li style = "float: left">
							<a href="#">
								<span  aria-hidden="true"></span></a>
							</li>
							<B>
								<font align="right" size = "3" face = 'Segoe UI'>
							<?php
								echo "&nbsp &nbsp &nbsp <img src = '../images/photo.png' width = 50 height=50> &nbsp Admin : ";
								echo "</font><font face = 'ubuntu' color = '#1e90ff' align='right' size = '3'><a href='' data-toggle='modal' data-target='#myModal3'>";
								echo $_SESSION['id1'];
								echo "</a>";
							
							?>
							
			
						</font></B>
						</b>
					</li>

				</ul>

<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
		
			<div class="modal-content" >
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">User Details</h3>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<img src = "../images/photo.png" width = 200 height=200>
						
						<p><?php
								include('../conn.php');
								$query=mysqli_query($conn,"select * from admin where Admin_ID ='".$_SESSION['id1']."'");
								$row=mysqli_fetch_assoc($query);
								if (!isset($_SESSION['id1']) ||(trim ($_SESSION['id1']) == '')){
								}
								else{
								echo "</br>";
								echo "Admin Name : ";
								echo $row['Admin_ID'];
								echo "</br>";
								
							}
						
							?>
							
								<input type="submit"  data-dismiss="modal" value="OK"/>
						
						</p>
							
						
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>

		<div class="ban-top">
		<div class="container">
		
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
													
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<font face = "ubuntu">
							<ul class="nav navbar-nav menu__list">
								<li class="<?php echo $a1; ?>">
									<a class="nav-stylehead" href="index.php">Dashboard
									</a>
								</li>
								<li class="<?php echo $a2; ?>">
									<a class="nav-stylehead" href="admin_customer.php">Customer
									</a>
								</li>
								<li class="<?php echo $a3; ?>">
									<a class="nav-stylehead" href="admin_category.php">Category
									</a>
								</li>
								<li class="<?php echo $a4; ?>">
									<a class="nav-stylehead" href="admin_product.php">Product
									</a>
								</li>
								
								<li class="<?php echo $a5; ?>">
									<a class="nav-stylehead" href="admin_order.php">Orders
										<span class="badge badge-danger"><?php 
										if($count5 == 0){}else{
										echo $count5; 
											}?></span>
									</a>
								</li>
							
								<li class="<?php echo $a6; ?>">
									<a class="nav-stylehead" href="admin_admin.php">Admin
									</a>
								</li>
								<li class="<?php echo $a7; ?>">
									<a class="nav-stylehead" href="admin_supplier.php">Supplier
									</a>
								</li>
								<li class="<?php echo $a8; ?>">
									<a class="nav-stylehead" href="admin_stock.php">Stock
									</a>
								</li>
								<li class="<?php echo $a9; ?>">

									<a class="nav-stylehead" href="admin_chat.php">Message  
										<?php if($count2 == 0){}else{?>
										<span class="badge badge-danger"><font face = 'sans-serif'>New</font></span>
									<?php }?>
									</a>
								</li>
								
							
							</ul>
							</font>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>




<?php } ?>
</body>
</html>