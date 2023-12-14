
<?php
	
	include('dbcon.php');
	if($_GET['id'])
	{
	$id=$_GET['id'];
	 $sql = "delete from cart where Product_ID='$id'";
	mysqli_query($conn, $sql);

	 ;

	  ?>
	<SCRIPT>
		alert("Data Deleted");
		window.location = "checkout.php";

	</SCRIPT>
	  <?php
	}

?>
