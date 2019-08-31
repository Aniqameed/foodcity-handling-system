<?php
	if(isset($_POST['login'])){

		
		session_start();
		include('../conn.php');
	
		$username=$_POST['Name'];
		$password=$_POST['password'];
	
		$query=mysqli_query($conn,"select * from `admin` where Admin_ID='$username' && Admin_Pass='$password'");
	
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			?>
			<script>
			
			window.location = "admin-login.php";
			alert('Login Failed. User not Found!');
			
			</script>
			
			<?php
		}
		else{
			$row=mysqli_fetch_array($query);

			mysqli_query($conn,"UPDATE admin SET onoff='online' WHERE Admin_ID = '$username'");
			
			$_SESSION['id1']=$row['Admin_ID'];
		
			?>
			<script>
			
			window.location = "index.php";
			
			</script>
			<?php
			
		}
	}
	else{
		header('location:admin-login.php');
		$_SESSION['message']="Please Login!";
	}
?>