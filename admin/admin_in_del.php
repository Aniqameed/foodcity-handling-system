<?php


include('../dbcon.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
 $sql = "delete from chat where Chat_ID='$id'";
mysqli_query($conn,$sql);




  
}

?>

<SCRIPT>
	alert("Delete Success");
	window.location = "admin_chat.php";
	</SCRIPT>