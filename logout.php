<?php
session_start();
$_SESSION['id'] = "";
include('conn.php');
$cusid = $_SESSION['cusid'];
date_default_timezone_set('Asia/Colombo');
$time = date("h:i:s A");
	$date = date("Y-m-d");
mysqli_query($conn,"UPDATE customer SET onoff='offline', last = '$time', lastdate = '$date' WHERE Customer_ID = '$cusid'");
$_SESSION['cusid'] = ""; 
$_SESSION['id'] = "";

	$cati = 0;
	$pr = 0;
	if(isset($_SESSION['ca'])){
	$cati = $_SESSION['ca'];
	
	}
	if(isset($_SESSION['pr'])){
		$pr = $_SESSION['pr'];
	}

	$status = $_SESSION['type'];

	if($status == "index"){
			?>
			<script>
			
			window.location = "index.php";
	
			
			</script>
			<?php
		}elseif($status == "cat"){
			?>
				<script>
			
			 window.location = "categories.php?id=<?php echo $cati; ?>";
	
			
			</script>
			<?php
		}elseif($status == "sin"){
			?>
			<script>
			
			window.location = "single.php?id=<?php echo $pr; ?>";
	
			
			</script>
			<?php
		}else{
				?>
			<script>
			
			window.location = "checkout.php";
	
			
			</script>
			<?php
		}

?>


