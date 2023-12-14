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

	include('../dbcon.php');
		$read = 0;
			$result7 = mysqli_query($conn,"SELECT * FROM chat WHERE Type = 'contact' AND To_Status = 'Read'");
			while($row = mysqli_fetch_array($result7))
				
				{

					 $read++;
				}

include('admin_header.php'); ?>
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
			<div class="col-sm-9" style = "width: 78%">
			<font face = "ubuntu" color = "blue"><h3><div style = "padding-left: 0%" ><i class="fa fa-envelope fa-lg"></i> Inbox  
				<?php if($count1 == 0){}else{?>
				&nbsp &nbsp<span class="badge badge-danger"><?php echo $count1; ?> Unread</span>&nbsp &nbsp
			<?php }?>

				<span class="badge badge-primary"><?php echo $read; ?> Read</span></div></h3></font><br>

			<?php
							include('../connect.php');
							$result = $db->prepare("SELECT * FROM chat ORDER BY Chat_ID DESC");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
								
						?>	
					
			<li class="list-group-item active" style="background: none;">
						<span>
							<font color = "black" face="ubuntu" size = "4">
								<a href = "view_in.php?id=<?php echo $row['Chat_ID'];?>" style = "color: black;">
							<b><i class="fa fa-envelope"> </i>&nbsp &nbsp<?php echo $row["Name"]; ?></b>  : <?php echo substr($row["Subject"],0,20)."....."; ?>
							</a>
						</font>
						<a href = "view_in.php?id=<?php echo $row['Chat_ID'];?>" style = "color: black;">
						<?php if($row["To_Status"] == "Read"){?>
						&nbsp &nbsp<span class="badge badge-primary"> Read</span>
						<?php }else{ ?>
						&nbsp &nbsp<span class="badge badge-danger"> unread</span>
						<?php
						} ?></a>
						</span>
						<span   class="pull-right">
							<a href = "view_in.php?id=<?php echo $row['Chat_ID'];?>" style = "color: black;">
							<font color = "black" face="ubuntu" size = "4">
							<i><?php echo $row['Date'];?>&nbsp &nbsp<?php echo $row['Time'];?></i></a>&nbsp &nbsp
							
							<a href="admin_in_del.php?id=<?php echo $row['Chat_ID'];?>"  class="btn btn-danger btn-xs" style = "font-size: 16px; font-family: 'ubuntu'; background-color: white; color : red;">Delete</a></font>
						</span>


					</li>
				
				<br>
				<?php } ?>

						

					
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

