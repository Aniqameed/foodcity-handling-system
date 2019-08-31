<?php
include('../dbcon.php');

			if (isset($_POST['save'])){
			session_start();
			$name=$_POST['name'];
			$catid = $_SESSION['catid'];
									 

			mysql_query("INSERT INTO categories VALUES ('$catid','$name')")or die(mysql_error());


			
			?>
			<script>
			alert('Category added Successfully');
			window.location = "admin_cat_add.php";
			
			</script>
			<?php
		}
		
?>