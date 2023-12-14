<?php 
$a1 = "";
	$a2 = "";
	$a3 = "";
	$a4 = "";
	$a5 = "";
	$a6 = "active";
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
		<title>Foodcity | Contact Us </title>
	</head>
	<body>

		<?php 
	if (!isset($_SESSION['cont']) ||(trim ($_SESSION['cont']) == '')){ 
	$cls = "modal fade";

	}else{
		$cls = "modal show";
	} 
?> 
	<div class="<?php echo $cls;?>" id="myModal11" tabindex="-1" role="dialog">
		<div class="modal-dialog"  style="width:500px;">
		
			<div class="modal-content" >
				<div class="modal-header">
					<a href="contact.php">
					<button type="button" class="close">&times;</button></a>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<div style="padding-left: 10%">
						
						<div style="padding-left: 30%">
						
							<img src = "images/pass.png" width = 170 height=170 align="center">
						
						</div>

						<br><br>
						<h3 class="agileinfo_sign" style="font-size: 20px; font-family: 'ubuntu';"><font color = "blue"><?php echo $_SESSION['cont'];
								$_SESSION['cont'] = "";
						?></font></h3>
						<div style="float: right;">

						<input type="submit" value="OK" name="OK" onclick="window.location.href = 'contact.php'"></div><br><br>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>
		
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Contact Us
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="mes.php" method="post">
							<div class="">
								<input type="text" name="cname" placeholder="Name" required="">
							</div>
							<div class="">
								<input class="text" type="text" name="subject" placeholder="Subject" required="">
							</div>
							<div class="">
								<input class="email" type="email" name="email" placeholder="Email" required="">
							</div>
							<div class="">
								<textarea placeholder="Message" name="message" required=""></textarea>
							</div>
							<input type="submit" value="Submit" name = "save">
						</form>
					</div>
					<div class="contact-right wthree">
						<div class="col-xs-7 contact-text w3-agileits">
							<h4>GET IN TOUCH :</h4>
							<p>
								<i class="fa fa-map-marker"></i> 57,Old peopl's bank road,Oddamavadi,Batticaloa.</p>
							<p>
								<i class="fa fa-phone"></i> Telephone : 0767683518</p>
							<p>
								<i class="fa fa-fax"></i> FAX : +1 888 888 4444</p>
							<p>
								<i class="fa fa-envelope-o"></i> Email :
								<a href="mailto:example@mail.com">aniqameed078@gmail.com</a>
							</p>
						</div>
						<div class="col-xs-5 contact-agile">
							<img src="images/contact2.jpg" alt="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
	<!-- map -->
	<div class="map w3layouts">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.3879921042953!2d81.52234542260754!3d7.913230833826025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afad87c5bffde6b%3A0x3d2150f0d9d1454c!2sOld%20People&#39;s%20Bank%20Rd%2C%20Oddamavadi!5e0!3m2!1sen!2slk!4v1702531576012!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		    allowfullscreen></iframe>
	</div>
	<?php include('Guest_Footer.php'); ?>
	</body>
</html>
