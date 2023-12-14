<?php


include('../dbcon.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from feedback where F_ID='$id'";
mysqli_query($conn, $sql);



 header("location: feed.php");
  
}

?>