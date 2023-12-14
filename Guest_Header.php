<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<?php $total = 0; ?>
	
	
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
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">



	
</head>

<!-- <script type="text/javascript">
function logout() {
 var xmlhttp=new XMLHttpRequest();
 xmlhttp.open("GET", "logout.php", true);
 xmlhttp.send();
} onbeforeunload="logout()"
</script> -->

<?php 
session_start();
	if(!isset($_SESSION['id']) || $_SESSION['id'] == ""){
?>

<body>
<?php
	}else{
		?>
			<body onclose="asd()" >
		<?php
	}
?>

	<script>
	function asd(){
		window.location = "logout.php";
	}
	</script>
	
	<div class="header-most-top">
		
		<p>Foodcity Offer Zone Top Deals & Discounts</p>
	</div>
	
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.php">
						<img src="images/logo.png" alt=" " width = 150 height = 120>
						<font face = "Ubuntu">
						<span>H2 </span>Foodcity
					</font>
					</a>
				</h1>
			</div>
		
			<div class="col-md-8 header">
			
				<ul>
					
					<b>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 0094767683518
					</li>
					<?php
							
		
							if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ 
								
								?>
								
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal2">
								<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
						</li>

						
						
						<?php
							}
							else{
								?>
							
							<li style = "float: right">
							<a href="logout.php">
								<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Out </a>
							</li>
							<B>
								<font align="right" size = "3" face = 'Segoe UI'>
							<?php
								echo "&nbsp <img src = 'images/photo.png' width = 50 height=50> &nbsp User : ";
								echo "</font><font face = 'Segoe UI' color = '#1e90ff' align='right' size = '3'><a href='#' data-toggle='modal' data-target='#myModal3'>";
								echo $_SESSION['id'];
								echo "</a>";
							}
							?>
						</font></B>
						
						</b>
					</li>

				</ul>

				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
							<?php
								if (!isset($_SESSION['mail']) ||(trim ($_SESSION['mail']) == '')){
									?>
									<button class="w3view-cart" type="submit" name="submit" value="" data-toggle='modal' data-target='#myModal1'>
									<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
									</button>
							<?php
								
								}
								else{
							?>
						
							<button class="w3view-cart" type="submit" name="submit" value="" data-toggle='modal' data-target='#myModal4'>
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>

						<?php }?>
						
					</div>
				</div>
				
				<div class="agileits_search">
					<form action="search.php" method="post">
						<div style ="">
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
						</div>
						<input type="search" placeholder="Search For Everything" name = "proname"> 
						
						
						<button type="submit" class="btn btn-default" aria-label="Left Align" required="">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button></div>


					</form>
						<?php 
					
				if(isset($_POST['Search'])){
					include('dbcon.php');
					
					$catname = $_POST['Search'];
					$query = mysqli_query($conn,"select * from categories where Cat_Name = '$catname'")or die(mysqli_error($conn));
					$count1 = mysqli_num_rows($query);
					

					if ($count1 > 0){ 
						include('dbcon.php');
								$query=mysqli_query($conn,"select * from categories where Cat_Name = '$catname'");
								$row=mysqli_fetch_assoc($query);
						
						?>
						<SCRIPT>
						window.location = "categories.php?id=<?php echo $row['Cat_ID']; ?>";
						</SCRIPT>
						<?php
						
					}
					else{
						
						?>
						<SCRIPT>
						alert("Category Not Found");
						</SCRIPT>
						<?php
						
					}
				}
				include('dbcon.php');
				$online = 0;
								$result7 = mysqli_query($conn,"SELECT * FROM admin where onoff = 'online'");
							while($row = mysqli_fetch_array($result7))
								
								{	
									$online++;
								}
				?>
					
						
				</div>
			
		
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>

							
							<font color = '#1e90ff'>
							Sign In now, Let's start your Food Shopping. Don't have an account?
							</font>
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="login_script.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Mail" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In" name="login">

						</form>
						
				
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							<font color = '#1e90ff'>
								<center>Come join the H2Foodcity! Let's set up your Account.</center>Signup
							</font>
						</p>
						<?php
								
									
									?>
						<form action="Cus_add.php" method="post">
							
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name Ex.ANIQA" name="name" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail Ex.ani@example.com" name="email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Address" name="address" required="">
							</div>
						
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Phone Ex.0767683518" onkeypress="return isNumberKey(event)" name="phone" required="">
							</div>

							<input type="submit" value="Sign Up" name="save">
						</form>
						<p>
							<a href="#">By clicking Sign up, You agree to our terms.</a>
						</p>
					</div>
				</div>
			</div>
		
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
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<img src = "images/photo.png" width = 200 height=200>
						
						<p><?php
								include('conn.php');
								$query=mysqli_query($conn,"select * from customer where Cus_Mail='".$_SESSION['mail']."'");
								$row=mysqli_fetch_assoc($query);
								if (!isset($_SESSION['mail']) ||(trim ($_SESSION['mail']) == '')){
								}
								else{
								echo "</br>";
								echo "User Name : ";
								echo $row['Cus_Name'];
								echo "</br>";

								echo "User Mail : ";
								echo $row['Cus_Mail'];
								echo "</br>";

								echo "User Address : ";
								echo $row['Cus_Address'];
								echo "</br>";

								echo "User Phone : ";
								echo $row['Cus_Phone'];
								echo "</br>";

								
							}
							?>
							
					<a href="#" data-toggle="modal" data-target="#myModal8">
					<div style = "float: right"><font face = "ubuntu" color = "blue"><h4><i class="fa fa-edit"></i>Edit User</h4></div></font></a>
						
						</p>
						<input type="submit"  data-dismiss="modal" value="OK"/>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	<div class="modal fade" id="myModal8" tabindex="-1" role="dialog">
		<div class="modal-dialog">
		
			<div class="modal-content" >
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Edit User</h3>
						
						<?php
					
						include('conn.php');

						$cusid = $_SESSION['cusid'];
						$query=mysqli_query($conn,"select * from customer where Customer_ID = '$cusid'");
						$row=mysqli_fetch_assoc($query);
									
									?>
						<form action="Cus_update.php" method="post">
							
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name Ex.ANIQA" name="name"  value = "<?php echo $row['Cus_Name'] ?>" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail Ex.ani@example.com" name="email" required="" value = "<?php echo $row['Cus_Mail']; ?>">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" value = "<?php echo $row['Cus_Pass']; ?>" name="password" id="password1" required="" >
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" value = "<?php echo $row['Cus_Pass']; ?>" name="ConfirmPassword" id="password2" required="" onkeyup="validatePassword()">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Address" name="address" required="" value = "<?php echo $row['Cus_Address']; ?>">
							</div>
						
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Phone Ex.0767683518" name="phone" onkeypress="return isNumberKey(event)" required="" value = "<?php echo $row['Cus_Phone']; ?>">
							</div>

							<input type="submit" value="Update" name="save">
						</form>
						
					</div>
				</div>
			</div>
		
		</div>
	</div>
	<?php 
	if (!isset($_SESSION['msg']) ||(trim ($_SESSION['msg']) == '')){ 
	$cls = "modal fade";

	}else{
		$cls = "modal show";
	} 
?> 
	<div class="<?php echo $cls;?>" id="myModal10" tabindex="-1" role="dialog">
		<div class="modal-dialog"  style="width:500px;">
		
			<div class="modal-content" >
				<div class="modal-header">
					<a href="index.php">
					<button type="button" class="close">&times;</button></a>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<div style="padding-left: 30%">
						<?php 
						if($_SESSION['msg'] == "You already added this Product"){
						?>
						<div style="padding-left: 10%">
						<img src = "images/cart.png" width = 140 height=170 align="center"></div>
						<?php }elseif($_SESSION['msg'] == "Product Finished.. Try Again Later"){ ?>
							<img src = "images/fail.png" width = 200 height=200 align="center">
						<?php } else{ ?>
							<img src = "images/pass.png" width = 170 height=170 align="center">
						<?php } ?>
						</div>

						<br><br>
						<h3 class="agileinfo_sign" style="font-size: 25px; font-family: 'ubuntu';"><font color = "blue"><?php echo $_SESSION['msg'];
								$_SESSION['msg'] = "";
						?></font></h3>
						<div style="float: right;">

						<input type="submit" value="OK" name="OK" onclick="window.location.href = '<?php echo $_SESSION['page']; ?>'"></div><br><br>
					</div>
				</div>
			</div>
		
		</div>
	</div>

	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">

		<div class="modal-dialog" style="width:1200px;">
			
			<div class="modal-content" >

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>
				<h3 class="agileinfo_sign">Customer Cart</h3>
				
				<div class="modal-body modal-body-sub_agile">

					

					<div class="modal_body_left modal_body_left1">
						<div class="checkout-right">
				
				<div class="table-responsive" style = "width: 100%">

					<table class="timetable_sub">
						<thead>
							<?php 
							
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
								include('dbcon.php');
							$no = 1;
							$cus = $_SESSION['cusid'];
							 $query = mysqli_query($conn,"SELECT * FROM cart where Order_ID = '$valu' AND Cus_ID = '$cus'")or die(mysqli_error($conn));
							$count = mysqli_num_rows($query);

						if ($count > 0){ ?>
							<tr>
								<th><font face = "ubuntu" size = 4>SL No.</font></th>
								<th><font face = "ubuntu" size = 4>Product</font></th>
								
								<th><font face = "ubuntu" size = 4>Product Name</font></th>

								<th><font face = "ubuntu" size = 4>Price</font></th>

								<th><font face = "ubuntu" size = 4>Quantity</font></th>
								<th><font face = "ubuntu" size = 4>Total Amount</font></th>
								<th><font face = "ubuntu" size = 4>Remove</font></th>

							</tr>
						</thead>
						<tbody>
							<?php
							include('dbcon.php');
							
							
							$result = mysqli_query($conn,"SELECT * FROM cart where Order_ID = '$valu' AND Cus_ID = '$cus'");
							while($row = mysqli_fetch_array($result))
								
								{	
									$_SESSION['Prid'] = $row['Product_ID'];
								?>
							<tr class="rem1">
								<td class="invert"><font face = "ubuntu" size = 4><?php echo $no?></font></td>
								<td class="invert-image">
									
										<img src="uploads/<?php echo $row['Imgurl'];?>" alt=" " class="img-responsive">
								
								</td>
							
								<td class="invert"><font face = "ubuntu" size = 4><?php echo $row['Pro_Name'];?></font></td>
								<td class="invert"><font face = "ubuntu" size = 4>Rs.<?php echo $row['Price'];?>.00</font></td>
								
								
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
										
											
											<div class="entry value">
												<span><font face = "ubuntu" size = 4><?php echo $row['Quantity'];?></font></span>
											</div>
											
										</div>
									</div>
								</td>
								<td class="invert"><font face = "ubuntu" size = 4>Rs.<?php echo $row['Amount'];?>.00</font></td>
								<td class="invert">
									
										<div class="snipcart-details10 top_brand_home_details item_add single-item hvr-outline-out">
											<font face = "ubuntu" size = 4>
											<input type="submit" name="submit" value="Remove" class="button10" onclick = "window.location.href='Cart_delete1.php?id=<?php echo $row['Product_ID']; ?>'"/></a></font>
										</div>
									</div>
								</td>
							</tr>
							
						<?php $no++; }?>

						<?php 
							$result = mysqli_query($conn,"SELECT * FROM cart where Order_ID = '$valu' AND Cus_ID = '$cus'");
							while($row = mysqli_fetch_array($result))
								{
									$total = $total + $row['Amount'];

								}
								
								?>
							<tr>
								<td colspan = "5"><b><font face = "ubuntu" size = 4><div style = "float: right">Total :</div></font></b> </td>
								<td><b><font face = "ubuntu" size = 4>
						Rs.<?php echo $total; ?>.00</b></font></b>
					</td>
					<td><form action="checkout.php" method="post">
											<input type="submit" name="submit" value="Checkout" class="button" />
									</form></td></tr>
									<?php }
					else{
						echo "<br><br><font face = 'ubuntu' color = 'red'><h2><center>You Didn't Select product</center></h2></font><br><br>";
					}?>
						</tbody>
					</table>
					
				</div>
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
								<li class = "<?php echo $a1; ?>">
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>

						
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">

												<ul class="multi-column-dropdown">
													<font size = 2px>
													<?php
														 
														include('connect.php');
														$result = $db->prepare("SELECT * FROM categories");
														$result->execute();
														for($i=1; $i<20; $i++){
															$row = $result->fetch();
													?>
												 
													<li>
														<a href="categories.php?id=<?php echo $row['Cat_ID']; ?>"><?php echo $row['Cat_Name']; ?></a>
													</li>

													<?php } ?>
													
												</font>
												</ul>
											</div>
											
											<div class="col-sm-4 multi-gd-img">
												<img src="images/nav.png" alt="">
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
									<li class = "<?php echo $a3; ?>">
									<a class="nav-stylehead" href="about.php">About Us</a>
								</li>
								<li class = "<?php echo $a4; ?>">
									<a class="nav-stylehead" href="checkout.php">Check Out <span class="badge badge-primary"><?php echo $count; ?></span></a>
								</li>

								
		
								
										
										<li class = "<?php echo $a5; ?>">
											<a class="nav-stylehead" href="feedback.php">Feedbacks </a>
										</li>
										
									

								<li class = "<?php echo $a6; ?>">
									<a class="nav-stylehead" href="contact.php">Contact Us</a>
								</li>
							</ul>
						</font>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<SCRIPT type = "text/javascript">
	$(window).load(function() {

		$('#myModal2').modal('show');

	});
</SCRIPT>
	
</body>
</html>