<?php
	if(isset($_POST['login'])){

		
		session_start();
		include('conn.php');
	
		$username=$_POST['Name'];
		$password=$_POST['password'];
	
		$query=mysqli_query($conn,"select * from `customer` where Cus_Mail='$username' && Cus_Pass='$password'");
	
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			?>
			<script>
			
			window.location = "checkout.php";
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
			mysqli_query($conn,"UPDATE customer SET onoff='online' WHERE Customer_ID = '$cusid'");?>
			<script>
			
			window.location = "checkout.php";
		
			
			</script>
			<?php
			
		}
	}
	else{
		header('location:checkout.php');
		$_SESSION['message']="Please Login!";
	}
?>