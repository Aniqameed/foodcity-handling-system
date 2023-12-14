<?php
include('conn.php');
			$query=mysqli_query($conn,"select Customer_ID from customer order by Customer_ID desc limit 1");

				if (mysqli_num_rows($query) == 0){
					$val = "CUS0001";
					$valu =$val;
					$_SESSION['cus'] = $valu;
				}
				else{
					$row=mysqli_fetch_array($query);
					
					$val = $row['Customer_ID'];
					$val = substr($val, 3, 5);

					$val = (int) $val +1;
					$val = "CUS".sprintf('%04s',$val);

					$valu = $val;
					
				}
include('dbcon.php');

			if (isset($_POST['save'])){
			$id = $valu;
			$name=$_POST['name'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$phone=$_POST['phone'];
									 

			$query = mysqli_query($conn,"select * from customer where Cus_Mail = '$email'");
			$count = mysqli_num_rows($query);

			if ($count > 0){ ?>
			<script>
			alert('Data Already Exist');
			window.location = "index.php";
			
			</script>
			<?php
			}else{

			mysqli_query($conn,"INSERT INTO customer (Customer_ID, Cus_Name, Cus_Pass, Cus_Address, Cus_Phone, Cus_Mail, onoff) VALUES ('$id', '$name', '$password', '$address', '$phone', '$email', 'online')");


			
			?>
			<script>
			alert('Register Success');
			window.location = "index.php";
			
			</script>
			<?php

		}
		session_start();
		include('conn.php');
	
	
		$query=mysqli_query($conn,"select * from `customer` where Cus_Mail='$email' && Cus_Pass='$password'");
	
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
			$_SESSION['mail']=$email;
			$_SESSION['cusid']=$row['Customer_ID'];?>
			<script>
			
			window.location = "index.php";
			alert('Login Success');
			
			</script>
			<?php
			
		}


	}

	
?>