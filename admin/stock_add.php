<?php
			if (isset($_POST['save'])){
			session_start();
			
			$catid = $_SESSION['stkid'];
			$sup=$_POST['supid'];
			$pro=$_POST['proid'];
			$quan=$_POST['quan'];

			include('../conn.php');
			$query=mysqli_query($conn,"select * from product where Product_ID = '$pro'");
			$row=mysqli_fetch_assoc($query);

			$newquan = $row['Quantity'] + $quan;


			include('../dbcon.php');			 
			mysqli_query($conn,"UPDATE product SET Quantity = '$newquan' WHERE Product_ID = '$pro'")or die(mysqli_error($conn));

			mysqli_query($conn,"INSERT INTO stock VALUES ('$catid','$sup','$pro','$quan')")or die(mysqli_error($conn));

			

			
			
			
			?>
			<script>
			alert('Stock added Successfully');
			window.location = "admin_stock_add.php";
			
			</script>
			<?php
		}
		
?>