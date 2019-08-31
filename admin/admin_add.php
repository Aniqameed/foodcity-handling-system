<?php
include('../dbcon.php');

			if (isset($_POST['save'])){
			session_start();
			$uname = $_POST['uname'];
			$password = $_POST['password1'];
									 

			mysql_query("INSERT INTO admin (Admin_ID, Admin_Pass) VALUES ('$uname','$password')")or die(mysql_error());


			
			?>
			<script>
			alert('Admin added Successfully');
			window.location = "admin_admin.php";
			
			</script>
			<?php
		}
		
?>