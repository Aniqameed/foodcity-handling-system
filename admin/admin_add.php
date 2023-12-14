<?php
include('../dbcon.php');

			if (isset($_POST['save'])){
			session_start();
			$uname = $_POST['uname'];
			$password = $_POST['password1'];
									 

			mysqli_query($conn,"INSERT INTO admin (Admin_ID, Admin_Pass) VALUES ('$uname','$password')")or die(mysqli_error($conn));


			
			?>
			<script>
			alert('Admin added Successfully');
			window.location = "admin_admin.php";
			
			</script>
			<?php
		}
		
?>