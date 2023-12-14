<?php
include('../dbcon.php');

			if (isset($_POST['save'])){
			session_start();
			$name=$_POST['name'];
			$catid = $_SESSION['catid'];
									 

			mysqli_query($conn,"INSERT INTO categories VALUES ('$catid','$name')")or die(mysqli_error($conn));


			
			?>
			<script>
			alert('Category added Successfully');
			window.location = "admin_cat_add.php";
			
			</script>
			<?php
		}
		
?>