<?php
include('../dbcon.php');

			if (isset($_POST['save1'])){
			session_start();
			$supid = $_SESSION['supid'];
			$name = $_POST['supname'];
			$add = $_POST['add'];
			$mail = $_POST['email'];
			$phone = $_POST['phone'];
			
			/*$supid=mysqli_real_escape_string($conn,$_POST['supid']);
			$name=mysqli_real_escape_string($conn,$_POST['supname']);
			$add=mysqli_real_escape_string($conn,$_POST['add']);
			$mail=mysqli_real_escape_string($conn,$_POST['email']);
			$phone=mysqli_real_escape_string($conn,$_POST['phone']);
*/
			mysqli_query($conn,"INSERT INTO supplier VALUES ('$supid','$name','$add','$mail','$phone')")or die(mysqli_error($conn));


			
			?>
			<script>
			alert('Supplier added Successfully');
			window.location = "admin_sup_add.php";
			
			</script>
			<?php
		}
		
?>