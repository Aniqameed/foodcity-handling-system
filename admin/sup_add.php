<?php
include('../dbcon.php');

			if (isset($_POST['save1'])){
			session_start();
			$supid = $_SESSION['supid'];
			$name = $_POST['supname'];
			$add = $_POST['add'];
			$mail = $_POST['email'];
			$phone = $_POST['phone'];
									 

			mysql_query("INSERT INTO supplier VALUES ('$supid','$name','$add','$mail','$phone')")or die(mysql_error());


			
			?>
			<script>
			alert('Supplier added Successfully');
			window.location = "admin_sup_add.php";
			
			</script>
			<?php
		}
		
?>