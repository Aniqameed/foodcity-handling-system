<?php
	if(isset($_POST['login'])){

		
		session_start();
		include('conn.php');
		$status = $_SESSION['type'];
		$username=$_POST['Name'];
		$password=$_POST['password'];
	
		$query=mysqli_query($conn,"select * from `customer` where Cus_Mail='$username' && Cus_Pass='$password'");
	
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			?>
			<script>
			
			window.location = "index.php";
			alert('Login Failed. User not Found!');
			
			</script>
			
			<?php
		}
		else{
			$row=mysqli_fetch_array($query);
			
			$_SESSION['id']=$row['Cus_Name'];
			$_SESSION['mail']=$username;
			$_SESSION['cusid']=$row['Customer_ID'];
			$cusid = $row['Customer_ID'];
			$cati = 0;
			$pr = 0;
			if(isset($_SESSION['ca'])){
			$cati = $_SESSION['ca'];
			
		}
		if(isset($_SESSION['pr'])){
			$pr = $_SESSION['pr'];
		}

		

			mysqli_query($conn,"UPDATE customer SET onoff='online' WHERE Customer_ID = '$cusid'");
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
			
		}
		}
		
	
	else{
		header('location:index.php');
		$_SESSION['message']="Please Login!";
	}
?>